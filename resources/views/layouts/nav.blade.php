
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">MServis</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form
            class="navbar-form navbar-right"
            action="/trazi-servisni-nalog"
            method="POST"
          >
            <input class="form-control" placeholder="Trazi..."  type="text" name="keyword" id="task-name">
            {{ csrf_field() }}
            <!-- Add Task Button -->
            <button type="submit" class="btn btn-primary btn-default"" >
                <i class="fa fa-find"></i> Trazi
            </button>
          </form>
        </div>
      </div>
    </nav>
