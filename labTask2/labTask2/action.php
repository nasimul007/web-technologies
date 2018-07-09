<!DOCTYPE html>
<html>
<head >
	<title>Frequency Counter</title>
	<style >
		table 
		{
			width: 50%;
		}
		th
		{
			height: 50px;
		}
		th, td
		{
			border-bottom: 1px solid #ddd;
		}
	</style>
</head>
<body>
	<h2>Character Frequency Count</h2>
	<?php
		$str = $_GET["txtarea"];
	?>

	<table align="center">
		<tr>
			<th>CHARACTER</th>
			<th>COUNT</th>
		</tr>
		<tr>
			<?php
			foreach (count_chars($str, 1) as $i => $value) :?>
				<tr>
					<td><?php echo chr($i); ?></td>
					<td><?php echo "$value"; ?></td>
				</tr>
			<?php endforeach; ?>
		</tr>
	</table>

	<h2>Word Count</h2>
	<table align="center">
		<tr>
			<th>WORDS</th>
			<th>COUNT</th>
		</tr>
		<tr>
			<?php
			foreach (array_count_values(str_word_count($str, true)) as $i => $value) :?>
				<tr>
					<td><?php print($i); ?></td>
					<td><?php echo "$value"; ?></td>
				</tr>
			<?php endforeach; ?>
		</tr>
	</table>
</body>
</html>