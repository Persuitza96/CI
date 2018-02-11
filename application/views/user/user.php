
<table class="table table-hover">
            <H1>ผู้เข้าอบรม</H1>
            <div class="alert alert-danger" role="alert">
                This is a danger alert—check it out!
                </div>
                <a href = "/user/adduser"
                class="btn btn-success"> เพิ่มผู้ใช้งาน </a>
            
            <thead>
                <tr>
                    <th>#</th>
                    <th>ระดับ</th>
                    <th>ชื่อผู้ใช้งาน</th>
                    <th>รหัสผ่าน</th>
                    <th>ชื่อ สกุล</th>
                    <th>อีเมล์</th>
                    <th>อายุ</th>
                    <th>จัดการ</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($users->result() as $user) {
    ?>
                            <tr>
                                <td><?php echo $user->user_id ?></td>
                                <td><?php echo $user->name ?></td>
                                <td><?php echo $user->username?></td>
                                <td><?php echo $user->password ?></td>
                                <td><?php echo $user->fullname ?></td>
                                <td><?php echo $user->email ?></td>
                                <td><?php echo $user->age ?></td>
                                <td>
                                <a href="/user/show/<?php echo $user->user_id ?>" class="btn btn-info">
<i class="fa fa-search"></i> แสดง</a>
<?php if ($this->session->has_userdata('user_id')and $this->session->userdata('user_type_id') == '1') {
        
     ?>
                                    <a href="/user/edit/<?php echo $user->user_id ?>" class="btn btn-warning"><i class="fas fa-edit"></i> แก้ไข</a>
                                    <a onclick="javascript: return confirm('แน่ใจหรือ ?')" href="/user/delete/<?php echo $user->user_id ?>" class="btn btn-danger"><i class="fas fa-minus-circle"></i> ลบ</a>
<?php }?>
                                </td>
                            </tr>
                            
                            <?php
} ?>
            </tbody>
        </table>