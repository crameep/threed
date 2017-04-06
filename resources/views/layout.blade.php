
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>3DScores.com - Your source for hitting the foam.</title>

  <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Styles -->
    <link href="css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
  <nav class="nav has-shadow" id="top">
    <div class="container">
      <div class="nav-left">
        <a class="nav-item" href="../index.html">
          <img src="ThreeD.png" alt="Description">
        </a>
      </div>
      <span class="nav-toggle">
        <span></span>
        <span></span>
        <span></span>
      </span>
      <div class="nav-right nav-menu">
        <a class="nav-item is-tab is-active">
          Home
        </a>
        <a class="nav-item is-tab">
          Features
        </a>
        <a class="nav-item is-tab">
          Team
        </a>
        <a class="nav-item is-tab">
          Help
        </a>
        <span class="nav-item">
          <a class="button">
            Log in
          </a>
          <a class="button is-info">
            Sign up
          </a>
        </span>
      </div>
    </div>
  </nav>
  <div class="section">
    <div class="">

 <div class="boards">
    <div class="columns is-multiline">

    @foreach ($events as $event)

    @component('components._clubpanel', ['event' => $event])

      @slot('name')
        {{ $event->club->name}}
      @endslot

      @slot('count')
          {{ $event->targets}}
      @endslot
    @endcomponent
    @endforeach
      </div>
    </div>


  </div>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/faker.min.js"></script>

</body>
</html>
