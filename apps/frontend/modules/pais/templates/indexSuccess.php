<h1>Efidiariopaiss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Created at</th>
      <th>Updated at</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($efidiariopaiss as $efidiariopais): ?>
    <tr>
      <td><a href="<?php echo url_for('pais/show?id='.$efidiariopais->getId()) ?>"><?php echo $efidiariopais->getId() ?></a></td>
      <td><?php echo $efidiariopais->getName() ?></td>
      <td><?php echo $efidiariopais->getCreatedAt() ?></td>
      <td><?php echo $efidiariopais->getUpdatedAt() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('pais/new') ?>">New</a>
