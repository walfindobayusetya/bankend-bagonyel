<div id="Home">
    <div class="container">
     <nav class="navbar navbar-expand-lg navbar-light">
         <div class="container-fluid">
           <a class="navbar-brand fw-bold text-warning" href="{{ route('/') }}">Walfindo</a>
           <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
               <li class="nav-item">
                 <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}"  aria-current="page" href="{{ route('home') }}">Home</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link  {{ ($title === "About") ? 'active' : '' }}" href="{{ route('about') }}">About</a>
               </li>
               <li class="nav-item">
                 <a class="nav-link  {{ ($title === "Contact") ? 'active' : '' }}" href="{{ route('contact') }}">Contact me</a>
               </li>
             </ul>
             <form class="d-flex">
               <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
               <button class="btn btn-outline-warning" type="submit">Search</button>
             </form>
           </div>
         </div>
       </nav>
    </div>
 </div>