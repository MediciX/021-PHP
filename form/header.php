<nav class="navbar navbar-light bg-light navbar-expand-lg rgba-stylish-strong sticky-top">
    <div class="container">
        <a href="index.php" target="_self" class="navbar-brand">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-windmill" width="30" height="30" viewBox="0 0 21 26" stroke-width="2.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <path stroke="none" d="M0 0h24v24H0z" fill="none"/> <path d="M12 12c2.76 0 5 -2.01 5 -4.5s-2.24 -4.5 -5 -4.5v9z" /> <path d="M12 12c0 2.76 2.01 5 4.5 5s4.5 -2.24 4.5 -5h-9z" /> <path d="M12 12c-2.76 0 -5 2.01 -5 4.5s2.24 4.5 5 4.5v-9z" /> <path d="M12 12c0 -2.76 -2.01 -5 -4.5 -5s-4.5 2.24 -4.5 5h9z" /> </svg>
          WindMill
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-collapse" aria-controls="nav-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="index.php" aria-current="page" target="_self" class="nav-link nuxt-link-exact-active nuxt-link-active">หน้าหลัก</a>
                </li> 
                <li class="nav-item">
                    <a href="/category" target="_self" class="nav-link">สินค้า</a>
                </li> 
                <li class="nav-item">
                    <a href="/lucky-draw" target="_self" class="nav-link">กล่องสุ่ม</a>
                </li>
                <li class="nav-item">
                    <a href="ListMember.php" target="_self" class="nav-link">รายชื่อสมาชิก</a>
                </li> 
            </ul>
            <ul class="navbar-nav makeright">
              <li class="nav-item">
                <a href="/auth/login" class="nav-link" target="_self">
                <i class="fas fa-sign-in-alt fa-fw"></i>
                เข้าสู่ระบบ
                </a>
              </li> 
              <li class="nav-item">
                <a href="formREG.php" class="nav-link" target="_self">
                <i class="fas fa-user-plus fa-fw"></i>
                สมัครสมาชิก
                </a>
              </li>
            </ul>
        </div>
    </div>
</nav>