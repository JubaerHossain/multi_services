<div class="modal modal-blur fade" id="_viewGlobal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title g_modal_title" id="modal_title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" /></svg>
            </button>
        </div>
          <div class="modal-body">
            <div class="card-body d-flex flex-column">            
            <table class="table">
              <thead>
              <tr>
                <th>@lang('language.name')</th>
                <th>@lang('language.created_at')</th>
              </tr>
              <thead>
                <tbody>
                   <tr>
                       <td id="_g_name"></td>
                       <td id="_g_time"></td>
                   </tr>
                </tbody>
          </table>
        </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
          </div>
        </div>
    </div>
  </div>