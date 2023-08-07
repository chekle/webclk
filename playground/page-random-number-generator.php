<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 * Template Name: Random Number Generator
 */

get_header(); ?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $minValue = $_POST['minValue'];
    $maxValue = $_POST['maxValue'];

    if ($minValue >= $maxValue) {
        $errorMessage = "Minimum value must be less than maximum value.";
    } else {
        $randomNumber = rand($minValue, $maxValue);
    }
}
?>

	<main>
		<?php get_template_part('components/content_components'); ?>
		<?php if ( get_the_content() ) { ?>
			<div class="margin">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<?php the_content(); ?>

							<style>
								#randomNumberForm {
									width: 300px;
									padding: 20px;
									background-color: #ffffff;
									border-radius: 8px;
									box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
								}

								label {
									display: block;
									margin-bottom: 5px;
									font-weight: bold;
								}

								input[type="number"] {
									width: 100%;
									padding: 10px;
									border: 1px solid #ccc;
									border-radius: 4px;
									box-sizing: border-box;
									font-size: 16px;
									margin-bottom: 10px;
								}

								button {
									display: block;
									width: 100%;
									padding: 10px;
									background-color: #3858e9;
									color: #ffffff;
									border: none;
									border-radius: 4px;
									cursor: pointer;
									font-size: 16px;
									transition: background-color 0.3s ease;
								}

								button:hover {
									background-color: #0056b3;
								}

								#result {
									font-size: 18px;
									margin-top: 20px;
								}
							</style>

							<form id="randomNumberForm">
									<label for="minValue">Min Value:</label>
									<input type="number" id="minValue" name="minValue" required>
									<br>
									<label for="maxValue">Max Value:</label>
									<input type="number" id="maxValue" name="maxValue" required>
									<br>
									<button type="button" id="generateButton">Generate Random Number</button>
							</form>
							<p id="result"></p>

							<script>
									document.addEventListener("DOMContentLoaded", function () {
											const form = document.getElementById("randomNumberForm");
											const generateButton = document.getElementById("generateButton");
											const resultElement = document.getElementById("result");

											generateButton.addEventListener("click", function () {
													const minValue = parseInt(form.minValue.value);
													const maxValue = parseInt(form.maxValue.value);

													if (isNaN(minValue) || isNaN(maxValue)) {
															resultElement.textContent = "Please enter valid numbers.";
													} else if (minValue >= maxValue) {
															resultElement.textContent = "Min value must be less than max value.";
													} else {
															const randomNumber = Math.floor(Math.random() * (maxValue - minValue + 1)) + minValue;
															resultElement.textContent = `Random Number: ${randomNumber}`;
													}
											});
									});
							</script>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</main>
<?php get_footer(); ?>
