<?php
$websites = [
  "https://www.google.com/",
  "https://www.instagram.com/",
  "https://www.bing.com/",
  "https://www.youtube.com/",
  "https://www.facebook.com/",
  "https://www.twitter.com/",
  "https://www.pinterest.com/",
  "https://www.linkedin.com/",
  "https://www.tiktok.com/",
  "https://www.snapchat.com/",
  "https://www.telegram.org/",
  "https://www.quora.com/",
  "https://www.reddit.com/",
  "https://www.yahoo.com/",
  "https://www.wikipedia.org/",
  "https://www.amazon.in/",
  "https://www.flipkart.com/",
  "https://www.olx.in/",
  "https://www.justdial.com/",
  "https://www.swiggy.com/",
  "https://www.zomato.com/",
  "https://www.fiverr.com/",
  "https://www.upwork.com/",
  "https://www.behance.net/",
  "https://www.dribbble.com/",
  "https://www.canva.com/",
  "https://www.shopify.com/",
  "https://www.bigcommerce.com/",
  "https://www.paytm.com/",
  "https://www.phonepe.com/",
  "https://www.hotstar.com/",
  "https://www.mxplayer.in/",
  "https://www.sharechat.com/",
  "https://www.cricbuzz.com/",
  "https://www.ndtv.com/",
  "https://www.news18.com/",
  "https://www.timesofindia.indiatimes.com/",
  "https://www.moneycontrol.com/",
  "https://www.coinmarketcap.com/",
  "https://www.indiamart.com/",
  "https://www.alibaba.com/",
  "https://www.magicbricks.com/",
  "https://www.naukri.com/",
  "https://www.monsterindia.com/",
  "https://www.glassdoor.com/",
  "https://www.hindustantimes.com/",
  "https://www.thehindu.com/",
  "https://www.techcrunch.com/",
  "https://www.businessinsider.com/",
  "https://www.cnbc.com/"
];

function getRandomUserAgent() {
  $agents = [
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64)",
    "Mozilla/5.0 (iPhone; CPU iPhone OS 16_0 like Mac OS X)",
    "Mozilla/5.0 (Android 12; Mobile; rv:100.0)",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7)"
  ];
  return $agents[array_rand($agents)];
}

$randomSite = $websites[array_rand($websites)];
$url = "https://www.psmcodes.com"; // Your website link

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_REFERER, $randomSite);
curl_setopt($ch, CURLOPT_USERAGENT, getRandomUserAgent());
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_exec($ch);
curl_close($ch);

echo "Traffic Sent from: $randomSite 🚀<br>";
?>
<script>
  setTimeout(() => {
    location.reload(); // Auto Reload every 10 secs
  }, 10000);
</script>
