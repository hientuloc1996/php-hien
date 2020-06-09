<div>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php
        foreach($users as $user){ ?>
          <tr>
              <td><?php echo $user->id;?></td>
              <td><?php echo $user->name;?></td>
              <td><?php echo $user->email;?></td>
              <td><?php echo $user->password;?></td>
              <td>
                <form action="">
                  <button>Xem</button>
                  <button>Sửa</button>
                  <button>Xóa</button>
                </form>
              </td>
          </tr>
          <?php } ?>
    </tbody>

  </table>
</div>

