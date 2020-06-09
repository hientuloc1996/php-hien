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
              <td style="display: flex;">
                <form action="{{route('show',$user->id)}}">
                  <button>Xem</button>
                </form>
                <form action="{{route('edit',$user->id)}}">
                  <button>Edit</button>
                </form>
                <form action="{{route('delete',$user->id)}}">
                  <button>Delete</button>
                </form>
              </td>
          </tr>
          <?php } ?>
    </tbody>

  </table>
    <form action="{{route('create')}}">
      <button>Create</button>
    </form>
</div>

