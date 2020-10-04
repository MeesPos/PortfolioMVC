<?php require 'vendor/autoload.php';
use \Firebase\JWT\JWT;

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$privateKey = <<<EOD
-----BEGIN PRIVATE KEY-----
h166mRSPZDd3YOXuFRTBhd97kIjeeiRNIubsD9R3hEs0bMtVi2QBWoVHyYS8GCa0
3eDPIqEzJ9GKhxqWS21T+xygD4DXbL9mpevWnJn5xKHR/SGX36mQN/7UN/947PCt
iqo5Jwa8/8DaNxS0m6xJ4ywQy6k3hxiocUUj8G8ovTNtPL7ucGeCNyovl26q+zxp
xA4kzmvFirrA7iq0d934iw1F82cx7TUKZELj8LC5cZAyrWdiQxaH/+VsmbtfLO7E
mvfiH4b6GbVc0Yfn1BFnkKcDK/TLYn/8KGm6/UrCnyv/C7PeLDh+A9HMfl8TLgfc
LCq+qXkPN/oW8jn9nPNYrbPz2WzkVk9Ll+gf3W1bcOW/eoXeCadM1p5PY0nQIYwt
ce/a2OFLRrR02Qd1rXo0pBCe8YmozW2/oPQ9M02C1Q2oXRIXMbmN8EzeTB0jSIYF
s+7iEYEv361TjnX1dv6dl2M4Vvecn8JWvrmTQFfxGsDjVOiv6gHko+QNta/ijOaT
yQ6NYEffAdaUMgoByZFEZIwaVb7WYLHOUYqvKjzBdf9ljFalNgm9ab5SXoZDRECl
OSeeDCP5ikHumaOiZXChkXHXka46NJdDuw6WZaq6mVzxfO26wKM4oFMYxCclN0Yd
X0rOwHrd0JRpgKMj0jXI3ahu5DF41rLH8M4FwAdvmCV/oJbYvsms4YjgKoImzvP/
CMykV2TtroPSpuqx3kBUPvEKhYwZVmk6ILhGt4GfgLgFu4Rm0EonFMILRdMzBe0W
TvHpo/T9CEZ1wwIefP+7ur00cceEpK/Pu1GsYbLMBAXyLrcgRzgmPiEqvlkJQhiC
WoNBEQ2kHZ+5RQoO31k6JD1mgo4Iv0/VLCX7FGVM24TTVfI9nTJbNhLVSahe76n2
mTkhaMpoMZtpux6a25XF8b7LaRfaGupSHcv7H8UYyr7sR1kAaLqgM/y40t8TuT0A
uEfzT0X1VTmmhtaU1ZbnFldCRsvMhaAmuL8N3ERug199CHbBFt3XZUCKWxX5ULd4
81kRBdxNMBz/kEQBr++Wepr8P+hwGYbbx5ESLL2k24/daUqECPbjH/dagaGOj42n
x8VEnA+a64u0or9KmJacmXcXzcierZDZ2GSDNRwKXIZcA0HmBu2/5lvIxsJrbvUN
DEdAkEI+CpB2fIaVItDPDowNe0h9uh3sqC4iiQoCJG8LyTGxnqaEaHpEpYpK5Gxx
d0Hx6tKjgWU7SV+oxspcsoXgApI5tMk3VzrfiBmAf22hopikd5CjybBqAOO9zEJE
YCr8hvrEXFPQs8/7UVG9YGlWzikWLu7QFRv53tzU+g1eH/U1ozNL2MIyv/FihC//
voBYUOjGEIFLIIVdTinkA6aSYWcu9/OxLLuzWj4ogWZTULPu0sviY4RDgnLgw5Kg
8zHSnlbJP6unVYy8I7d9KwV7Zyy5CgXFUksGkV8p2xpRwKuM7Ik6hU7JZkBIkQep
UdDrVU5ZhzY9IvYX0xxtJDxtNWk9vxx8tBtiIsPaUwGW57qD+AM8FLA6TAnC6inT
LAG54JnT9w/2P2oHSQtC3V8p8a9AQqCxddqwC++CmhYmt6UVksV3ekoo+ho5wI/U
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
  $token = JWT::encode($payload, $privateKey, array('RS256'));
  http_response_code(200);
  header('Content-Type: application/json');
  echo json_encode(array("token" => $token));
} catch (Exception $e) {
  http_response_code(500);
  header('Content-Type: application/json');
  echo $e->getMessage();
}