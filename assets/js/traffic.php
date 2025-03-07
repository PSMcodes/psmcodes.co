<?php
$websites = [
  "https://www.google.com/",
  "https://www.instagram.com/",
  "https://www.bing.com/",
  "https://www.youtube.com/",
  "https://www.facebook.com/",
  "https://www.twitter.com/"
];

function getRandomUserAgent() {
  $agents = [
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64)",
    "Mozilla/5.0 (iPhone; CPU iPhone OS 15_0 like Mac OS X)",
    "Mozilla/5.0 (Android 11; Mobile; rv:94.0)",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7)"
  ];
  return $agents[array_rand($agents)];
}

$randomSite = $websites[array_rand($websites)];
$ch = curl_init("https://psmcodes.com");

curl_setopt($ch, CURLOPT_REFERER, $randomSite);
curl_setopt($ch, CURLOPT_USERAGENT, getRandomUserAgent());
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
curl_close($ch);

echo "Traffic Sent from: $randomSite 🚀<br>";
?>
<script>
  setTimeout(() => {
    location.reload(); // Automatically reload after 10 seconds
  }, 10000);
</script>
