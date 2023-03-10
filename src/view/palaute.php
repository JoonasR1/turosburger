<?php 
$this->layout('template', ['title' => 'Palaute']);

$palaute = haePalaute();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  $name = $_POST['name'];
  $feedback_text = $_POST['feedback_text'];
  $date_time = date('Y-m-d H:i:s');
  $query = "INSERT INTO feedback (name, feedback_text, date_time) VALUES (?, ?, ?)";
  $params = [$name, $feedback_text, $date_time];
  DB::run($query, $params);

 
  $palaute = haePalaute();
}

?>

<h2>Anna palautteesi</h2>

<form method="POST" action="palaute">
  <label for="name">Nimi:</label>
  <input type="text" name="name" required>

  <label for="feedback_text">Palaute:</label>
  <textarea name="feedback_text" required></textarea>

  <button type="submit">Lähetä</button>
</form>

<table>
  <thead><th>Nimi</th><th>Palaute</th><th>Päivä/aika</th></tr></thead>
  <tbody>
    <?php foreach ($palaute as $entry) { ?>
      <tr>
        <td><?php echo $entry['name']; ?></td>
        <td><?php echo $entry['feedback_text']; ?></td>
        <td><?php echo $entry['date_time']; ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
