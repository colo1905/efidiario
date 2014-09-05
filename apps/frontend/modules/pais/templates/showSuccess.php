<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $efidiariopais->getId() ?></td>
    </tr>
    <tr>
      <th>Name:</th>
      <td><?php echo $efidiariopais->getName() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $efidiariopais->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Updated at:</th>
      <td><?php echo $efidiariopais->getUpdatedAt() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('pais/edit?id='.$efidiariopais->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('pais/index') ?>">List</a>
