<div class="navbar navbar-default">
        <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::route('home') }}">{{ Config::get('myConfig.siteName') }}</a>
       </div>
        <div class="navbar-collapse collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
          

                @if(Auth::check())
                    
                  @if(Session::get('role') == 1)
                        
                       

                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Areas <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li>{{ HTML::linkRoute('area.index','All Areas') }}</li>
                        <li>{{ HTML::linkRoute('area.create','New Area') }}</li>
                      </ul>
                    </li>
                        
                  @endif
                
                    
                @endif
                    
                    
          
        </ul>
          <ul class="nav navbar-nav navbar-right">
            
             @if(!Auth::check())
                    
                    
                    <li>{{ HTML::linkRoute('login','Login') }}</li>
                    @else

                      @if(Session::get('role') == 1)
                        
                       

                    
                        
                      @endif
                      @if(Session::get('role') == 2)
                        
                        
                        
                      @endif
                        
                       <li>{{ HTML::linkRoute('logout','Logout ('.Auth::user()->user_name.')') }}</li> 
                    @endif
        </ul>
      </div>
    </div>