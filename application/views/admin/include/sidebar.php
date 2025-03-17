<!-- Sidebar -->
<nav id="sidebar" class="sidebar">
  <div class="sidebar-header d-block text-center py-4 pt-5">
    <div class="d-flex justify-content-center align-items-center">
      <img src="application/public/logo.png" alt="logo" class="rounded-circle mb-3 mx-2" height="60"
        onclick="window.location.href='/barangay/Dashboard'">
      <img src="application/public/northcaloocan_logo.png" alt="logo" class="rounded-circle mb-3 mx-2" height="60"
        onclick="window.location.href='/barangay/Dashboard'">
    </div>
    <p class="text-light fw-bold">BRGY. 185 MLR SYSTEM</p>
  </div>

  <!-- Menu Items -->
  <p class="text-light mt-5 mx-3" style="font-size: 12px">General</p>
  <a href="/barangay/dashboard" class="menu-item mt-3 mb-2">
    <i class="bi bi-house-fill"></i>
    <span class="menu-title">Dashboard</span>
  </a>
  <a href="/barangay/Resident" class="menu-item my-2">
    <i class="bi bi-person-fill"></i>
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

  <span class="text-light Smenu-item text-start mx-1 rounded" data-bs-toggle="collapse" href="#certificate"
    role="button" aria-expanded="false" aria-controls="certificate">
    <i class="bi bi-patch-check-fill"></i>
    <span class="menu-title">Certificate Issuance</span>
  </span>

  <div class="collapse mt-2" id="certificate">
    <a href="/barangay/Certificate" class="menu-item mx-2 rounded">
      <i class="bi bi-patch-check-fill"></i>
      <span class="menu-title">Walk-in Certificate
      </span>
    </a>

    <a href="#" class="menu-item mx-2 rounded mt-2">
      <i class="bi bi-patch-check-fill"></i>
      <span class="menu-title">Online Request
      </span>
    </a>
  </div>

  <?php if (isset($user) && $user->role_id == 1 || $user->role_id == 2): ?>
    <p class="text-light mt-5 mx-3" style="font-size: 12px">Setting</p>
    <span class="text-light menu-item text-start " data-bs-toggle="collapse" href="#collapseExample" role="button"
      aria-expanded="false" aria-controls="collapseExample">
      <i class="bi bi-sliders2"></i>
      <span class="menu-title">Settings</span>
    </span>

    <div class="collapse mt-2" id="collapseExample">
      <a href="#" class="Smenu-item">
        <i class="bi bi-gear-fill"></i>
        <span class="menu-title">Account Setting
        </span>
      </a>
    </div>
  <?php endif; ?>

  <?php if (isset($user) && $user->role_id == 1): ?>
    <p class="text-light mt-5 mx-3" style="font-size: 12px">Accounts</p>
    <a href="/barangay/addaccount" class="menu-item my-2">
      <i class="bi bi-person-circle"></i>
      <span class="menu-title">Add Account</span>
    </a>
  <?php endif; ?>




  <a href="<?php echo site_url('auth/logout'); ?>" class="menu-item my-2 mt-5">
    <i class="bi bi-box-arrow-in-left"></i>
    <span class="menu-title">Signout
    </span>
  </a>

  <footer class="px-2">@ Copyright &copy; <?php echo date('Y'); ?> BARANGAY 185 MALARIA DISTRICT 3, CALOOCAN CITY. All
    Right Reserved
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