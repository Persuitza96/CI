<div class="card">
   <div class="card-header">ข้อมูล
       <div class="float-right"><a href="/user/edit/<?php echo $user->user_id ?>" class="btn btn-warning">แก้ไข</a></div></div>
 <div class="card-body">
 <p><strong>ชื่อผู้ใช้งาน : </strong> <?php echo $user->username ?></p>
 <p><strong>รหัสผ่าน : </strong> <?php echo $user->password ?></p>
   <p><strong>ชื่่อ : </strong> <?php echo $user->fullname ?></p>
   <p><strong>อีเมล์ : </strong><?php echo $user->email ?></p>
   <p><strong>อายุ : </strong><?php echo $user->age ?></p>
 </div>
</div>


