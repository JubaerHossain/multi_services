var url = $("#url").val()
var currency = $("#currency").val()
$("#livesearch").hide();
$(document).ready(function () {
// array data with selection
var product_cost = [];
var product_discount = [];
var tax_rate = [];
var tax_name = [];
var tax_method = [];
var rowindex;
var row_product_cost;



PosSearch = (str) => {    
    if (str.length == 0) {
        document.getElementById("livesearch").innerHTML="";
        $("#livesearch").hide();
    return;
    }
    $.ajax({
            method:'GET',
            url: url + '/' + 'poses/search',
            data: {
                data: str
            },
            success:function(data){
                 console.log(data);
                $("#livesearch").show();
                if (data.length != 0) {
                 document.getElementById("livesearch").innerHTML="";
                 data.forEach(value => {
                     var str = value.title;
                    $("#livesearch").append(`<ul class="list-group">
                    <li class="list-group-item " onclick="AddToCart(${value.p_id})" style="cursor:pointer">${str}</li>
                  </ul>`);
                 }); 
                }
                else{
                    document.getElementById("livesearch").innerHTML="";
                    $("#livesearch").append(`<ul class="list-group">
                    <li class="list-group-item " style="cursor:pointer">Not Found</li>
                  </ul>`);
                }
            },
            error: function (data) {
                console.log('Error:', data);
            }

        });
    
}

$(document).on('click', function (e) {
    if ($(e.target).closest("#livesearch").length === 0) {
        $("#livesearch").hide();
    }
});

AddToCart = (id) => {
    productSearch(id);  
    $("#livesearch").hide();  
}



function productSearch(data) {
    $.ajax({
        type: 'GET',
        url: url + '/poses/cart',
        data: {
            data: data
        },
        success: function(data) {
            if (data.error == 'out_stock') {
                toastr.error('Out  of stock medicine!', 'Error!'); 
            } else {
            var flag = 1;
            $(".product-code").each(function(i) {
                if ($(this).val() == data['code']) {
                    rowindex = i;
                    var qty = parseFloat($('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ') .qty').val()) + 1;
                    $('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ') .qty').val(qty);
                    calculateRowProductData(qty);
                    flag = 0;
                }
            });
            $("input[name='product_code_name']").val('');
            if(flag){
                var newRow = $("<tr>");
                var cols = '';
                cols += '<td>' + data['name'] + '</td>';
                cols += '<td>' + data['code'] + '</td>';
                cols += '<td><input type="number" min="0" class="form-control qty" name="qty[]" value="1" step="any" required/></td>';
              
                cols += '<td class="net_unit_cost"></td>';
                cols += '<td class="discount">0.00</td>';
                cols += '<td class="tax"></td>';
                cols += '<td class="sub-total"></td>';
                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                cols += '<input type="hidden" class="product-code" name="product_code[]" value="' + data['code'] + '"/>';
                cols += '<input type="hidden" class="product-id" name="product_id[]" value="' + data['id'] + '"/>';
                cols += '<input type="hidden" class="net_unit_cost" name="net_unit_cost[]" />';
                cols += '<input type="hidden" class="discount-value" name="discount[]" />';
                cols += '<input type="hidden" class="tax-rate" name="tax_rate[]" value="' + data['tax'] + '"/>';
                cols += '<input type="hidden" class="tax-value" name="tax[]" />';
                cols += '<input type="hidden" class="subtotal-value" name="subtotal[]" />';
                newRow.append(cols);
                $("table.order-list tbody").append(newRow);

                product_cost.push(parseFloat(data['price']));
                row_product_cost = (parseFloat(data['price']));
                product_discount.push(parseFloat(data['discount']));
                tax_rate.push(parseFloat(data['tax_rate']));
                tax_name.push(data['tax_name']);
                tax_method.push(data['tax_method']);
                rowindex = newRow.index();
                calculateRowProductData(1);
            }
            
         }
        }
    })
}

function calculateRowProductData(quantity) {
      
    $('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ')').find('td:nth-child(5)').text((product_discount[rowindex] * quantity).toFixed(2));
    $('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ')').find('.discount-value').val((product_discount[rowindex] * quantity).toFixed(2));
    $('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ')').find('.tax-rate').val(tax_rate[rowindex].toFixed(2));
     
        var net_unit_cost = row_product_cost - product_discount[rowindex];
        console.log(row_product_cost);
        
        var tax = net_unit_cost * quantity * (tax_rate[rowindex] / 100);
        var sub_total = (net_unit_cost * quantity) + tax;

        $('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ')').find('td:nth-child(4)').text(row_product_cost.toFixed(2));
        $('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ')').find('.net_unit_cost').val(row_product_cost.toFixed(2));
        $('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ')').find('td:nth-child(6)').text(tax.toFixed(2));
        $('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ')').find('.tax-value').val(tax.toFixed(2));
        $('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ')').find('td:nth-child(7)').text(sub_total.toFixed(2));
        $('table.order-list tbody tr:nth-child(' + (rowindex + 1) + ')').find('.subtotal-value').val(sub_total.toFixed(2));
 

    calculateTotal();
}
function calculateTotal() {
    //Sum of quantity
    var total_qty = 0;
    $(".qty").each(function() {

        if ($(this).val() == '') {
            total_qty += 0;
        } else {
            total_qty += parseFloat($(this).val());
        }
    });
    $("#total-qty").text(total_qty);
    $('input[name="total_qty"]').val(total_qty);

    //Sum of discount
    var total_discount = 0;
    $(".discount").each(function() {
        total_discount += parseFloat($(this).text());
    });
    $("#total-discount").text(total_discount.toFixed(2));
    $('input[name="total_discount"]').val(total_discount.toFixed(2));

    //Sum of tax
    var total_tax = 0;
    $(".tax").each(function() {
        total_tax += parseFloat($(this).text());
    });
    $("#total-tax").text(total_tax.toFixed(2));
    $('input[name="total_tax"]').val(total_tax.toFixed(2));

    //Sum of subtotal
    var total = 0;
    $(".sub-total").each(function() {
        total += parseFloat($(this).text());
    });
    $("#total").text(total.toFixed(2));
    $('input[name="total_cost"]').val(total.toFixed(2));

    calculateGrandTotal();
}
function calculateGrandTotal() {

    var item = $('table.order-list tbody tr:last').index();
    var total_qty = parseFloat($('#total-qty').text());
    var subtotal = parseFloat($('#total').text());

    item = ++item + '(' + total_qty + ')';
    var grand_total = subtotal;

    $('#item').text(item);
    $('input[name="item"]').val($('table.order-list tbody tr:last').index() + 1);
    $('#subtotal').text(subtotal.toFixed(2));
    $('#grand_total').text(grand_total.toFixed(2));
    $('input[name="grand_total"]').val(grand_total.toFixed(2));
}

//Delete product
$("table.order-list tbody").on("click", ".ibtnDel", function(event) {
    rowindex = $(this).closest('tr').index();
    product_cost.splice(rowindex, 1);
    product_discount.splice(rowindex, 1);
    tax_rate.splice(rowindex, 1);
    tax_name.splice(rowindex, 1);
    tax_method.splice(rowindex, 1);
    row_product_cost = "";
    $(this).closest("tr").remove();
    calculateTotal();
});

//Change quantity
$("#myTable").on('input', '.qty', function() {
    rowindex = $(this).closest('tr').index();
    calculateRowProductData($(this).val(), true);
});

$( "#pos-form" ).validate({
        
    rules: {
            customer: {
                required: true,
            },
            amount: {
                required: true,
            }
        },
submitHandler: function(form) {
    var amount = $("input[name='amount']").val();
    var total_dues = $("input[name='dues']").val();
    var grand_total = $("input[name='grand_total']").val();
    var due = parseFloat(grand_total) - parseFloat( amount);    
    var qty = $("input[name='total_qty']").val()
    
    var payment_method = $("select[name='payment_method']").val()

    if (!$("select[name='customer']").val()){
        $("#customer-error").text('This field is required.')
        event.preventDefault();  
    } 
    else if ( due > total_dues && due != total_dues){
        toastr.error($('#select_item_due').val(), 'Error!'); 
        event.preventDefault();  
    } 
    else if (!amount || amount <= 0){
        $("#amount-error").text('This field is required.')
        event.preventDefault();  
    } 
    else if (!qty || qty <= 0){
        toastr.error($('#select_item_error').val(), 'Error!'); 
        event.preventDefault();  
    }
    else if (!payment_method || payment_method == 1 ){
        $("#bank-error").text('This field is required.')
        event.preventDefault();  
    }else{        
        form.submit();
    }
}
});

$('select[name="payment_method"]').on("change", function() {
    if ($("select[name='payment_method']").val() ==1) {
        $(".bank_select").removeClass("d-none")
    }else{
        $(".bank_select").addClass("d-none")
    }
});

});