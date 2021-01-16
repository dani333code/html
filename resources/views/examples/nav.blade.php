<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
-->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Creative Tim
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">

        

          <li class="nav-item active  ">
            <a class="nav-link" href="/dashboard">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/make_deposit">
              <i class="material-icons">payment</i>
              <p>make deposit</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/make_withdrawal">
              <i class="material-icons">redeem</i>
              <p>request withdrawal</p>
            </a>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="/deposits">
              <i class="material-icons">addchart</i>
              <p>Deposit history</p>
            </a>
          </li>
         
          <li class="nav-item ">
            <a class="nav-link" href="/withdrawals">
              <i class="material-icons">receipt</i>
              <p>Withdrawal history</p>
            </a>
          </li>
          @if(Auth::user()->role_id == 1)
            <li class="nav-item ">
              <a class="nav-link" href="/confirm-depo">
                <i class="material-icons">bubble_chart</i>
                <p>confirm deposits</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/confirm-with">
                <i class="material-icons">bubble_chart</i>
                <p>confirm withdrawal</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/admin-index">
                <i class="material-icons">bubble_chart</i>
                <p>Update Account</p>
              </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="/edit-profile">
                <i class="material-icons">edit</i>
                <p>Edit Profile</p>
              </a>
            </li>
          @endif


       
          <li class="nav-item ">
            <a class="nav-link" href="/referral">
              <i class="material-icons">bubble_chart</i>
              <p>Referral System</p>
            </a>
          </li>
          <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
        </ul>
      </div>
    </div>