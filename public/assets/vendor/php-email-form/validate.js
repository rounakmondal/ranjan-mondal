$(document).ready(function() {
    alert('ranjan modnal');

    toastr.options = {
                'closeButton': true,
                'debug': false,
                'newestOnTop': false,
                'progressBar': true,
                'positionClass': 'toast-top-right',
                'preventDuplicates': false,
                'showDuration': '1000',
                'hideDuration': '1000',
                'timeOut': '5000',
                'extendedTimeOut': '1000',
                'showEasing': 'swing',
                'hideEasing': 'linear',
                'showMethod': 'fadeIn',
                'hideMethod': 'fadeOut',
            }
        
      toastr.options.timeOut =8000;
      @if (Session::has('error'))
          toastr.error('{{ Session::get('error') }}');
      @elseif(Session::has('success'))
          toastr.success('{{ Session::get('success') }}');
      @elseif(Session::has('info'))
          toastr.info('{{ Session::get('info') }}');
      @endif
     
  });