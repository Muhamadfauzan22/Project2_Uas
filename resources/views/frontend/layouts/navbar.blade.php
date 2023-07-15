 <!-- header -->
 <div class="header">
     <div class="container">
         <div class="w3layouts_logo">
             <a href="index.html">
                 <h1>One<span>Movies</span></h1>
             </a>
         </div>
         <div class="w3l_sign_in_register">
             <ul>
                 @if(Auth::check())
                 <li><i class="fa fa-user" aria-hidden="true"></i>{{Auth::user()->name}}</li>
                 <li>

                     <form action="{{ route('logout') }}" method="POST">
                         @csrf
                         <button type="submit" class="btn btn-warning">Logout</button>
                     </form>
                 </li>

                 @else
                 <li><i class="fa fa-phone" aria-hidden="true"></i>+62812314152</li>
                 <li>
                     <a href="#" data-toggle="modal" data-target="#myModal">Login</a>
                 </li>
                 @endif
             </ul>
         </div>
         <div class="clearfix"> </div>
     </div>
 </div>
 <!-- //header -->
 <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 Sign In & Sign Up
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
             </div>
             <section>
                 <div class="modal-body">
                     <div class="w3_login_module">
                         <div class="module form-module">
                             <div class="toggle"><i class="fa fa-times fa-pencil"></i>
                                 <div class="tooltip">Click Me</div>
                             </div>
                             <div class="form">
                                 <h3>Login to your account</h3>
                                 <form action="/login" method="post">
                                     @csrf
                                     <input type="email" name="email" value="{{old('email')}}" placeholder="email" required>
                                     <input type="password" name="password" placeholder="Password" required="" value="{{old('password')}}">
                                     <button type="submit" class="btn btn-warning">Login</button>
                                 </form>
                             </div>
                             <div class="form">
                                 <h3>Create an account</h3>
                                 <form action="/register" method="post">
                                     @csrf
                                     <input type="text" name="name" placeholder="name" value="{{old('name')}}" required="">
                                     <input type="email" name="email" value="{{old('email')}}" placeholder="Email Address" required="">
                                     <input type="password" name="password" value="{{old('password')}}" placeholder="Password" required="">
                                     <input type="hidden" name="role" value="user">
                                     <button type="submit" class="btn btn-warning">Register</button>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
         </div>
     </div>
 </div>

 <!-- nav -->
 <div class="movies_nav">
     <div class="container">
         <nav class="navbar navbar-default">
             <div class="navbar-header navbar-left">
                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                 </button>
             </div>
             <!-- Collect the nav links, forms, and other content for toggling -->
             <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                 <nav>
                     <ul class="nav navbar-nav">
                         <li class="active"><a href="/">Home</a></li>
                         <li>
                             <a href="/genres">Genres</a>
                         </li>
                         <li>
                             <a href="/countries">Country</a>
                         </li>
                         <li><a href="/drakor">Drakor</a></li>
                     </ul>
                 </nav>
             </div>
         </nav>
     </div>
 </div>
 <!-- //nav -->