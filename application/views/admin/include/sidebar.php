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
    background-color: #203659;
    overflow-y: scroll;
  }

  /* WebKit browsers */
  .sidebar::-webkit-scrollbar {
    width: 10px;
    /* Width of the scrollbar */
  }

  .sidebar::-webkit-scrollbar-thumb {
    background-color: #4a6b8c;
    /* Color of the scrollbar thumb */
    border-radius: 5px;
    /* Rounded edges for the scrollbar thumb */
  }

  .sidebar::-webkit-scrollbar-track {
    background-color: #2a3b4c;
    /* Background of the scrollbar track */
  }

  /* Firefox */
  .sidebar {
    scrollbar-width: thin;
    /* Use 'auto' or 'thin' */
    scrollbar-color: #4a6b8c #2a3b4c;
    /* Thumb color and track color */
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
    background-color: #121D31;
  }

  .Smenu-item:hover {
    background-color: #121D31;
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
    margin-top: 10rem;
    color: white;
    font-size: 10px;
    text-align: center;
    position: relative;
    bottom: 10px;
    width: 100%;
  }

  .menu-item.active {
    background-color: #121D31;
    border-bottom: 2px solid #fff;
  }

  .Smenu-item.active {
    background-color: #121D31;
    border-bottom: 2px solid #fff;
  }

  .setting {
    width: 100%;
  }
</style>

<!-- Sidebar -->
<nav id="sidebar" class="sidebar">
  <div class="sidebar-header d-block text-center py-4 pt-5">
    <img src="application/public/logo.png" alt="logo" class="rounded-circle mb-3" height="60"
      onclick="window.location.href='/barangay/Dashboard'">
    <p class="text-light fw-bold">BRGY. 185 MLR SYSTEM</p>
  </div>

  <!-- Menu Items -->
  <p class="text-light mt-5 mx-3" style="font-size: 12px">General</p>
  <a href="/barangay/dashboard" class="menu-item mt-3 mb-2">
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
  <a href="/barangay/settlement" class="menu-item my-2">
    <i class="bi bi-calendar-fill"></i>
    <span class="menu-title">Settlement Schedule</span>
  </a>
  <a href="#" class="menu-item my-2">
    <i class="bi bi-patch-check-fill"></i>
    <span class="menu-title">Certificate Issurance
    </span>
  </a>

  <p class="text-light mt-5 mx-3" style="font-size: 12px">Setting</p>
  <span class="text-light setting menu-item text-start my-2" data-bs-toggle="collapse" href="#collapseExample"
    role="button" aria-expanded="false" aria-controls="collapseExample">
    <i class="bi bi-sliders2"></i>
    <span class="menu-title">Settings</span>
  </span>

  <div class="collapse" id="collapseExample">
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

  <p class="text-light mt-5 mx-3" style="font-size: 12px">Accounts</p>
  <a href="#" class="menu-item my-2">
    <i class="bi bi-person-circle"></i>
    <span class="menu-title">Account
    </span>
  </a>

  <a href="#" class="menu-item my-2">
    <i class="bi bi-building-fill"></i>
    <span class="menu-title">Barangay
    </span>
  </a>

  <a href="/barangay/auth" class="menu-item my-2 mt-5">
    <i class="bi bi-box-arrow-in-left"></i>
    <span class="menu-title">Signout
    </span>
  </a>

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