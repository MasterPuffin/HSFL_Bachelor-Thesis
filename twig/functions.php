<?php

function devPrint($obj): void {
	echo '<pre>';
	print_r($obj);
	echo '</pre>';
}

//Redirects the user to a given URL
function redirect($url) {
	if (!headers_sent()) {
		header('Location: ' . $url);
	} else {
		echo '<meta http-equiv="refresh" content="0;url=' . $url . '">';
	}
	exit;
}

//Returns the lorem ipsum
function loremIpsum(): string {
	return 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,';
}

//Truncates a string and adds ... to the end
function truncate(string $string, int $length): string {
	return substr($string, 0, $length) . "...";
}

//Adds the server path to an image and if the image is null, returns an placeholder image
function resolveImage(?string $image): string {
	if (empty($image)) $image = "placeholder.jpg";
	return RESOURCESROOT . "/.assets/images/" . $image;
}