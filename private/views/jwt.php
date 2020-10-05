<?php 
use \Firebase\JWT\JWT;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$privateKey = <<<EOD
-----BEGIN PRIVATE KEY-----
MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQDA0AcFN4AvExbJ
sFXxf4aDMPyg+DLm2/zJBJtGTThPWZSHSr2+bZuTxE4WzIFzJGw0p3f2zXvzL2hE
Ms/0zVF/TYo2utBL5GVOoENflc4st5byZF91lEY9qugYbYRyDcd/jvUeaWbhUFha
z/hH/sjjKtoU+3T9flmppG1VB8qX2wAuvaJXZQQTM/8QkgV890bm/tu4zrez3/EX
GZUSAvXDY/GC1zr8nRSRoGJShVrVkJ8PAvhMWrjsIOtNmPZPBLSzg0cmXBoDWy89
V1lBpCzHCJIUTvP7jaPZJYKaH1mI3noH+aLsGBS4YbWUi5aRvVSAyX09nH+pm9TO
BlbuO6bhAgMBAAECggEAf3kJKynGVVkJd85dA4yMIbABVWrCPF60gTHKdnAXCl7v
E4MWbw+IC+l8txX9f2JVJ3qQlVrE18I/7NarJe2YM9HPzt8zVvlpANJzuH4SEP5P
jXFOqy2cQqj7SSsepUj23B5nb/O/ULcNsvxL6U1JAucRx013yx/9p2pN3imIh1vb
4vx8Fd2vftjTOvrNIYlmAexGhxADfW6hDcYKTc2nV5YJzU0NyXNLwd/kVSHYBJ42
9no/HjgoJny1b14CNppHIimqSYejuTqokE3ePybEGOtKXnYuKHqv0aaQuxtEFGm0
b8t5Wcw0abc8kZ3GXMcAwUTvyvzsxxuovl/b/tSZAQKBgQDvyl3RtKGmQjTmMhem
7H6Z+9231ylH6UzTnj81As0zrmYRmcmf9rsAvrfsbXypo0IGnqEGMsVNHQug+Lvm
VCRsUNWV4OpivxrQvFPGNoi4zTeE2Vk2H+CeBAn/BnMtC5F5anf7uc7sjhNkhdx9
+P2vUmCWA/wpgCKWZYHz2/eUKwKBgQDN2LJxnVEjCUo9bndL3jwg8LGKDcFbStiD
NnKfeDDoDdKRzhH7sY0/wH/eU2n8OAlsExHXfFRX9vK2+Z3/mSXfqXryw9Ni7785
Ya9aPuH07E1AOLAW6vAwHHGGx/lRpLwfeNPYIl8BRsldGwHETcxT1SKoXCaf4BCY
QGIy3cuvIwKBgCeLgB1tZJs+n+q2qB/nMJnEZ7RBz5UEbJ8ZoeLkK2Myh7KvYgj3
b6+XxE1BYSW4vtLIplWXWeJ1v800OAisJ7WVPyQQi5btXUa/SDGQHMwdS+Kk1YmP
iEOG9v8P2T68gak8Xb0tz2pDo/8X9FzyCyQ2uacD0Tom341eAChvRk0xAoGAFv6j
CHATdT9/bJdfejksLF3W514cAG+++gFmEoxhojqREDqd5ajy53FAl3xn9YXo/4qt
zo2T+nOar3f4/2mDQpXzJxVbEs1HZkiURxeJNEwFYSwz94ttI2K6B91k64rkfPuJ
ZraIOGNI8T6oFt69+YtwoLASnH9yOx/OGHKQY1MCgYEAjGCZukFscWl5D7gJoCI4
bfR8j7WIkH6+1XsBQ9svAUMajyOctglDXzia7EdxgQ+v29Nn17iOGzADhcYbZ+ky
VDb3chYX/C0mqQJifKZIfW5yL+kkZhQo9dmN8kLs14y4fXSlr2JAyi9Vqw5sKstE
UhWTp8pboCXsW7HBgFP5XKA=
-----END PRIVATE KEY-----
EOD;

$payload = array(
  // Unique user id string
  "sub" => "3c311f17930f55d4ec6432249a4a1990",
  // "sub" => "123",

  // Full name of user
  "name" => "Mees Postma",

  // Optional custom user root path
  // "https://claims.tiny.cloud/drive/root" => "/meespostma",

  // 10 minutes expiration
  "exp" => time() + 60 * 10
);

try {
  $token = JWT::encode($payload, $privateKey, 'RS256');
  http_response_code(200);
  header('Content-Type: application/json');
  echo json_encode(array("token" => $token));
} catch (Exception $e) {
  http_response_code(500);
  header('Content-Type: application/json');
  echo $e->getMessage();
}