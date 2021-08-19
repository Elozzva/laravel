<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="author" content="colorlib.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet" />
    <link href="../css/main.css" rel="stylesheet" />
  </head>
  <body>
    <div class="s002">
      <form>
        <fieldset>
          <legend>CATALOGO</legend>
        </fieldset>
        <div class="inner-form">

          <div class="input-field fouth-wrap">
{{--             <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path>
              </svg>
            </div> --}}

            <select id="Shipowner" onchange="goSearch()" data-trigger="" name="choices-single-defaul">
                @forelse ($Armadoras as $Armadora)
                    <option value="{{ $Armadora->id }}"><a href="/searchByShipowner/{{ $Armadora->id }}"> {{ $Armadora->name }} </a></option>
                @empty
                    <option value="">No hay registros</option>
                @endforelse

            </select>
          </div>
          <div class="input-field first-wrap">
{{--             <div class="icon-wrap">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"></path>
              </svg>
            </div> --}}
            <input id="search" type="text" placeholder="¿Cual es tu auto?" />
          </div>
          <div class="input-field fifth-wrap">
            <button class="btn-search" type="button">SEARCH</button>
          </div>
        </div>
      </form>
    </div>
    <script src="js/extention/choices.js"></script>
    <script src="js/extention/flatpickr.js"></script>
    <script>
      flatpickr(".datepicker",
      {});
        function goSearch() {
            var x = document.getElementById('Shipowner').value;
            window.open("/searchByShipowner/" + x, "_self");
        }
    </script>
    <script>
      const choices = new Choices('[data-trigger]',
      {
        searchEnabled: false,
        itemSelectText: '',
      });

    </script>
  </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
