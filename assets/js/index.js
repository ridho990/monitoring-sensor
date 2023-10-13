// Memanggil data grafik
const refreshid = setInterval(() => {
	$("#response-container").load("data.php");
}, 1000);
