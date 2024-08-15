<?php

function translatedFilter() {
  return fn ($child) => $child->translation(kirby()->language()->code())->exists();
}