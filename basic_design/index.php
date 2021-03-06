<html><head>
    <title>Click For Fly</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- jquery added for search -->
    <script src="jquery/jquery-1.11.2.min.js"></script>
    <script src="jquery/jquery.easy-autocomplete.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head><body>
    <!-- Form for from and to destination in post method redirect to mainform
    page -->
    <div class="main">
      <div class="navbar navbar-default navbar-static-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><img height="42" alt="Brand" src="logo\new-size-logo-copy-1.png" class="img-rounded"></a>
          </div>
          <div class="collapse navbar-collapse" id="navbar-ex-collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">Flight</a>
              </li>
              <li>
                <a href="#">Hotel + Flight</a>
              </li>
              <li>
                <a href="#">Contact us</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <form action="mainform.php" method="post">
        <!-- Ticket Type -->
        <div class="main-content">
          <!-- radio button -->
          <div class="ticket-type">
            <input type="radio" name="select" value="roundtrip" style="margin-right: 5">
            <label class="ticket-type-input">Round Trip</label>
            <input type="radio" name="select" value="oneway" style="margin-right: 5">
            <label class="ticket-type-input">One Way</label>
            <input type="radio" name="select" value="multicity" style="margin-right: 5">
            <label>Multi City</label>
          </div>
          <br>
          <div class="form-to">
            <!-- From destination -->
            <div class="from">
              <label class="from-text">From</label>
              <input class="from-input" type="text" name="fromdestination" id="input1" placeholder="Enter City or airport" size="30">
            </div>
            <!-- To destination -->
            <div class="to">
              <label class="to-text">To</label>
              <input class="to-input" type="text" name="todestination" id="input2" placeholder="Enter City or airport" size="30">
            </div>
          </div>
          <!-- jquery main script -->
          <script src="countries.js"></script>
          <div class="leave-return">
            <!-- leaving info -->
            <div class="leave">
              <label class="leave-text">Leaving On</label>
              <input class="leave-input" type="text" name="to" id="input3" placeholder="Enter City or airport" size="30">
            </div>
            <!-- Return Info -->
            <div class="return">
              <label class="return-text">Return On</label>
              <input class="return-input" type="text" name="to" id="input4" placeholder="Enter City or airport" size="30">
            </div>
          </div>
          <div class="options">
            <!-- Members Info -->
            <div class="adult-option">
              <label class="adult-text">Adult:</label>
              <select class="numberOfAdult">
                <option value="1" selected="selected">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <!-- Child Info -->
            <div class="child-option">
              <label class="child-text">Child:</label>
              <select class="numberOfChildren">
                <option value="0" selected="selected">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <!-- Infant -->
            <div class="infant-option">
              <label class="infant-text">Infant:</label>
              <select class="numberOfInfant">
                <option value="0" selected="selected">0</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <!-- Class -->
            <div class="class-option">
              <label class="class-text">Class:</label>
              <select class="numberOfClass">
                <option value="Economy" selected="selected">Economy</option>
                <option value="business">Business</option>
                <option value="first">First</option>
              </select>
            </div>
          </div>
          <br>
          <!-- Submit button redirect to mainform.php page -->
          <div class="button">
            <input type="submit" name="submit" value="submit" id="submit" class="btn">
          </div>
        </div>
      </form>
      <footer class="section section-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 text-left">
              <p class="text-left text-muted">@copyright 2016-17</p>
            </div>
            <div class="col-sm-6">
              <p class="text-muted text-right">Developed by HexaParity</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  

</body></html>