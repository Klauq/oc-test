<php

namespace KCygan\Password;
use JKan\Component\Password\EncodingMethod;

class Sha1Encoding implements EncodingMethod {
public function encode($plainText)
  {
    return Sha1($plainText);
  }
}
