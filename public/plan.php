<?php declare(strict_types=1);

use App\Plans\PlanFactory;

require_once dirname(__DIR__, 1) . '/vendor/autoload.php';

//  php -S localhost:8000 .\public\plan.php

$planFactory = new PlanFactory();

$plan = null;

if (isset($_GET['plan'])) {
	$plan = $planFactory->createPlan($_GET['plan']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Select A Plan</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<main class="container">

	<?php if($plan): ?>

		<p>Rate: <?= $plan->getRate() ?></p>
		<ul>
			<?php foreach ($plan->getFeatures() as $feature): ?>
				<li><?= $feature ?></li>
			<?php endforeach; ?>
		</ul>

	<?php else: ?>

		<p>
			<a href="plan.php?plan=free">Free</a>
			<a href="plan.php?plan=pro">Pro</a>
		</p>

	<?php endif; ?>
</main>
</body>
</html>