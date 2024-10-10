<style>
  .sidebar {
    width: 350px;
    max-width: 350px;
    height: 100vh;
    position: relative;
    top: 0;
    left: 0;
    transition: all 0.3s ease;
    z-index: 1000;
    scrollbar-width: thin;
  }

  .sidebar.collapsed {
    margin-left: -350px;
  }

  .menu-item {
    padding: 15px 20px;
    display: flex;
    align-items: center;
    color: white;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .Smenu-item {
    padding: 15px 20px;
    display: flex;
    align-items: center;
    color: white;
    text-decoration: none;
    transition: background-color 0.3s ease;
  }

  .menu-item:hover {
    background-color: #2E58FF;
    border-bottom: 2px solid #fff;
  }

  .Smenu-item:hover {
    background-color: #2E58FF;
    border-bottom: 2px solid #fff;
  }

  .menu-item span {
    width: 100%;
    letter-spacing: 1px;
    font-size: 14px;
    font-weight: 500;
  }

  .Smenu-item span {
    width: 100%;
    letter-spacing: 1px;
    font-size: 14px;
    font-weight: 500;
  }

  .menu-item i {
    margin-right: 1rem;
    font-size: 15px;
  }

  .Smenu-item i {
    margin-right: 1rem;
    font-size: 15px;
  }

  .menu-icon {
    font-size: 20px;
    margin-right: 20px;
  }

  .menu-title {
    transition: opacity 0.3s ease;
  }

  .toggle-btn {
    position: absolute;
    top: 20px;
    left: 10px;
    background-color: transparent;
    border: none;
    color: white;
    font-size: 24px;
    cursor: pointer;
  }

  footer {
    color: white;
    font-size: 10px;
    text-align: center;
    position: absolute;
    bottom: 10px;
    width: 100%;
  }

  .menu-item.active {
    background-color: #2E58FF;
    border-bottom: 2px solid #fff;
  }

  .Smenu-item.active {
    background-color: #2E58FF;
    border-bottom: 2px solid #fff;
  }

  .setting {
    width: 100%;
  }
</style>

<!-- Sidebar -->
<nav id="sidebar" class="sidebar bg-dark">
  <div class="sidebar-header bg-dark d-flex align-items-start justify-content-start py-2 px-2">
    <img
      src="https://tse3.mm.bing.net/th?id=OIP.54-qxAfgXRkmPyPDmECkWQAAAA&pid=Api&P=0&h=220"
      alt="logo" class="rounded-circle" height="50" onclick="window.location.href='/barangay/Dashboard'">>
  </div>

  <!-- Menu Items -->
   <p class="text-light mt-5 mx-3" style="font-size: 12px">General</p>
  <a href="/barangay/Dashboard" class="menu-item mt-3 mb-2">
    <i class="bi bi-house-fill"></i>
    <span class="menu-title">Dashboard</span>
  </a>
  <a href="/barangay/Resident" class="menu-item my-2">
    <i class="bi bi-person"></i>
    <span class="menu-title">Resident Information</span>
  </a>
  <a href="/barangay/Blotters" class="menu-item my-2">
    <i class="bi bi-archive-fill"></i>
    <span class="menu-title">Blotter Record</span>
  </a>
  <a href="#" class="menu-item my-2">
    <i class="bi bi-calendar-fill"></i>
    <span class="menu-title">Settlement Schedule</span>
  </a>
  <a href="#" class="menu-item my-2">
    <i class="bi bi-patch-check-fill"></i>
    <span class="menu-title">Certificate Issurance
    </span>
  </a>
  <button class="btn btn-dark setting menu-item text-start my-2" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
  aria-controls="collapseExample">
    <i class="bi bi-sliders2"></i>
    <span class="menu-title">Settings</span>
  </button>


  <div class="collapse bg-primary" id="collapseExample">
    <a href="#" class="Smenu-item">
      <i class="bi bi-person-vcard-fill"></i>
      <span class="menu-title">Account
      </span>
    </a>
    <a href="#" class="Smenu-item">
      <i class="bi bi-gear-fill"></i>
      <span class="menu-title">Barrangay
      </span>
    </a>
  </div>

  <footer class="px-2">@ Copyright &copy; 2024 BARANGAY 185 MALARIA DISTRICT 3, CALOOCAN CITY. All Right Reserved
  </footer>
</nav>

<script>
  document.querySelectorAll('.menu-item').forEach(item => {
    item.addEventListener('click', function () {
      document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));

      this.classList.add('active');

      document.querySelectorAll('.collapse').forEach(collapse => collapse.classList.remove('show'));
    });
  });

  const currentPath = window.location.pathname;
  document.querySelectorAll('.menu-item').forEach(item => {
    if (item.getAttribute('href') === currentPath) {
      item.classList.add('active');
    }
  });
</script>