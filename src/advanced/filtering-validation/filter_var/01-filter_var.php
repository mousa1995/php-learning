<?php
// filter_var first transforms scalar values to string then does it's job.
$email = "mousa@example.com";

$f = filter_var($email, FILTER_VALIDATE_EMAIL);

#             filter_var()
#                 │
#        ┌────────┼────────┐
#        ↓        ↓        ↓
#      value    filter   options