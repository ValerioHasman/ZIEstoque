@push('icones')
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endpush

@push('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
@endpush

@push('script')
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
@endpush

@push('estilos')
  <style>
    .imagem {
      aspect-ratio: 16 / 10;
      object-fit: cover;
    }
    .titulo {
      height: 72px;
      padding: 0 0.4rem 0 0.4rem !important;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      text-overflow: ellipsis;
      overflow: hidden;
    }
    .descricao {
      height: 115.5px;
    }
    .descricao p {
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      text-overflow: ellipsis;
      overflow: hidden;
    }
    .sticky-bottom {
      position: -webkit-sticky;
      position: sticky;
      bottom: 0;
      z-index: 998;
      margin-bottom: 0;
    }
    .sticky-top {
      position: -webkit-sticky;
      position: sticky;
      top: 0;
      z-index: 998;
    }
  </style>

@endpush

@push('roteiros')
  <script type="module">
    document.addEventListener('DOMContentLoaded', function() {
      const elems = document.querySelectorAll('.materialboxed');
      const instances = M.Materialbox.init(elems);
    });
    document.addEventListener('DOMContentLoaded', function() {
      const elems = document.querySelectorAll('.dropdown-trigger');
      const instances = M.Dropdown.init(elems);
    });
    document.addEventListener('DOMContentLoaded', function() {
      const elems = document.querySelectorAll('.sidenav');
      const instances = M.Sidenav.init(elems);
    });
  </script>
@endpush
