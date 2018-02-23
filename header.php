<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
      
    <title>Navbar</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
      
  </head>
  <body>
      
      <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
                <a class="navbar-brand">Store</a>
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
              </button>
            </div>
            <div class="navbar-collapse collapse" id="navbarCollapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">All Products</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Departments <span class="caret"></span></a></li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="input-group">
                        <span class="input-group-btn"><button type="submit" class="btn btn-info">Go</button>
                        </span>
                        <label for="search" class="sr-only">Search</label>
                        <input type="text" id="search" class="form-control" placeholder="Search">
                        <span class="glyphicon glyphicon-search form-control-feedback">
                        </span>
                    </div>
                </form>
                
                <form class="navbar-form navbar-right">
                    <input class="btn btn-success" type="button" value="Login">
                </form>
            </div>
        </div>
      </nav>
      
    </body>
</html>

    

      

