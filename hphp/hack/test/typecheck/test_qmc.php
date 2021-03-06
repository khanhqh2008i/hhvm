<?hh
/**
 * Copyright (c) 2014, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the "hack" directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the same directory.
 *
 */

class Foo {
  
  private ?int $optional_param = null;
  private int $required_param = 0;


  public function test(): ?int {
    
    $foo = $this->optional_param ?: $this->required_param;
    return $foo;
  }
}
