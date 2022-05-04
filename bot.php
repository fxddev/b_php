<?php



function fetchData()
{
  $curl = curl_init();

  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://shopee.co.id/api/v4/item/get?itemid=8380745823&shopid=9997564',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
      'cookie: _gcl_au=1.1.144007562.1636204425; _fbp=fb.2.1636204425673.1991864209; SPC_F=A16qXFhoo5W8CzzLhhUmZcHHW7kiQAm6; REC_T_ID=46d701f6-3f03-11ec-9108-f8f21e185f40; _gcl_aw=GCL.1640146268.Cj0KCQiAk4aOBhCTARIsAFWFP9HkVXdibhLWOOPqNWJkYU8y16cqoDlrAEmeJdGrfUpvQP9wdXTqeRsaAj12EALw_wcB; G_ENABLED_IDPS=google; SPC_CLIENTID=QTE2cVhGaG9vNVc4memkmvezhmcstjvi; __stripe_mid=dda1f544-67d7-47c0-94a1-f08a758e81f3f73433; _med=refer; SPC_SI=bfftocsg9.PIoIxWTjCRy1lcTcZ0x7IgjFRnvFq8cU; csrftoken=aktDlT5fh1tZv7HnirP0rG2KgkABlxu9; _QPWSDCXHZQA=3236dc0f-1a3d-415d-ef89-778361f9c4a7; AMP_TOKEN=%24NOT_FOUND; _gid=GA1.3.907750021.1642298775; SPC_ST=\\".WWpramcxU0JlUHVNSXJ4MvVE7cV978YtGQXFSe8sPL6pAjT5kRW3EVcnWIQPuB8VJF3Fxwjx5m4QNheseIlcxn1baeKNfwecqPyejQeIyILLV+xe1XDDWS//+/lhNJDF5TgUshg86L5L01LpfYmFTVkBQAmLXLrKXbD7sYfSVKZ/A0JCq2RWPcHNzOXoG3DhFuDsoMmsAG6H1huk9LmpmQ==\\"; SPC_U=130628750; SPC_EC=UkdlS0JCZFZkMXVWbVFUVdLtsYp4h3CREha73pnrVrck5IuyHg3V2S/oug+DTKk5jGWyjusqP47vvxZyC4N7unQIBqRTc68wuZZZc7LJU/liRoNo6d3YGei1lxp7t1X2XoALzlUrc+cIQWW1ry4ifdq2UnoAdVphJKhnvXikvNE=; SPC_IA=1; cto_bundle=byw0D19UYTB4dkx1WEdkY0hYVWkwQ3p3VUF6eVVwJTJGYlFkR1U1Z2VFbE1rU0pHa2kxY1FFNERBaWNTQ0xoWG00MGdXWFpXV1hJd1dXWlo2JTJGdGJtSzFuNENFVkNFSXlSazFyRTdCcGhyV0xwS1d1bEhjam5PMHdVT2t1RHMwN3pNZzJQayUyQjBFSCUyRiUyRk96Z0EzY1cwTDNsdDJnbjhhQW5zdk1VYk5nVmdwQWIyQlhiSjZRJTNE; _dc_gtm_UA-61904553-8=1; SPC_T_ID=6fNQlp3pf9HzsvOmmK5mAoDUTS78desBTXvVliqElKWH7RNIlBxWTAWLMf/jjQlX6+7cUXdRvAPqo0EcU+eHz7FgND9XcvJJzsRuTf48d2s=; SPC_T_IV=s6ItYGsywyKMQtayVXBkUw==; SPC_R_T_ID=\\"yxhzXwlqLr4iBQc6xLpOiVo+KPay14bha+LjkAKJfGxkQoD+7IcuDG1bpB/Z8yNPfxrt7DDDzif0OpHqhDaP/S4fLS4DYspeDVMdGSvVY04=\\"; SPC_T_IV=\\"lV4jezTjkxQhOgbXsGWYwQ==\\"; SPC_R_T_IV=\\"lV4jezTjkxQhOgbXsGWYwQ==\\"; SPC_T_ID=\\"yxhzXwlqLr4iBQc6xLpOiVo+KPay14bha+LjkAKJfGxkQoD+7IcuDG1bpB/Z8yNPfxrt7DDDzif0OpHqhDaP/S4fLS4DYspeDVMdGSvVY04=\\"; _ga_SW6D8G0HXK=GS1.1.1642298770.33.1.1642299237.47; _ga=GA1.1.1405782320.1636343991; shopee_webUnique_ccd=21ciok%2BLbGEOue%2Bf7Hjf4w%3D%3D%7C2yyu5rPk8Eo6sI7Z8MQpTQ4reVc06s8RGIVZ62SkWq2u9arja5bDFKONDfa3ByXUqLrPf2HsRs8PmFx7urn3%7CGcpomRbBPBqeXdnf%7C04%7C3; SPC_R_T_ID=LKCesFBtUwlzn/plz/L3Lm4vkaT8M8l0vmxqXKjZJ3UpNiC8tm9J/GFIe5nZhzRZTS4x+vZCJUiM/6GjuZ2+qvHxYM4G7ujHvco3TqoWUHo=; SPC_R_T_IV=aZOlTPOzjibb5pw74+UtOA==; SPC_T_ID=LKCesFBtUwlzn/plz/L3Lm4vkaT8M8l0vmxqXKjZJ3UpNiC8tm9J/GFIe5nZhzRZTS4x+vZCJUiM/6GjuZ2+qvHxYM4G7ujHvco3TqoWUHo=; SPC_T_IV=aZOlTPOzjibb5pw74+UtOA==; SPC_ST=.WDdoWGIyWUVPeEZ0M29QWVxFcNcSVCp6VQgdqnR8tEcjkeL1RNTNA5CvnQav6pbR8E33aZDe01uP+J+AU512T8iGB/XM1mD3FvNBUI5Q7iJcAAe0BhmH8arugHGSYGiBkj7q1UnUSL8K47SQD+hNbXEISRlu3A++uwp8IRu9Ds8NF0KqpKndb08Z8muMjUk10GfUDMtCRJi9kXbzNGdX3Q==; SPC_U=130628750; SPC_EC=dlNIVm96RE9vWFpPSVRrMC6LnsoL5Kz2LbuyGMzQloDUIxgVxqBTbSx496ZZYb+HKf4jr46NqDPCbBQzH2/2PoeweWgp623tho3w4Q5R8orP/01qtJJIuRHinxtnaa/Xci1mHLsYeaumuT+pGJXUkt5BADLVEkaVchlWrWLiZLU='
    ),
  ));

  $response = curl_exec($curl);

  if (curl_exec($curl)) {
    $info = curl_getinfo($curl);
    echo 'Took ' . $info['total_time'] . ' seconds ';
    echo "";
  }

  curl_close($curl);
  // echo $response;
}

while (true) {
  fetchData();
}
