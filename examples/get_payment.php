<?php

include __DIR__ . '/../vendor/autoload.php';
$yaml = new \Symfony\Component\Yaml\Parser();
$settings = \Symfony\Component\Yaml\Yaml::parse(file_get_contents(__DIR__.'/settings.yml'));

try {
    $client = new \GuzzleHttp\Client([
        // Add certificate.
        'cert' => $settings['cert'],
    ]);
    $vipps = new \Vipps\Vipps($client);
    // Set Vipps client.
    $vipps->setMerchantID($settings['id'])->setMerchantSerialNumber($settings['serialNumber'])->setToken($settings['token']);
    // Get payment.
    $payment = $vipps->payments();
    // Set Order ID.
    $payment->setOrderID($settings['transaction']['orderId']);
    // Get transaction status.
    var_dump($payment->getStatus());
    // Get transaction details.
    var_dump($payment->getDetails());
}
catch (Exception $e) {
    print '<pre>' . var_dump($e) . '</pre>';
}
