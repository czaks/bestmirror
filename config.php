<?php
// bestmirror config

$mirrors = array(
	"http://zlew.webchat.6irc.net" => "http://zlew.webchat.6irc.net/images/qwebircsmall.png",
	"http://sundance.webchat.6irc.net" => "http://sundance.webchat.6irc.net/images/qwebircsmall.png",
	"http://minimal.webchat.6irc.net" => "http://minimal.webchat.6irc.net/images/qwebircsmall.png",
);
$mirrors = shuffle_assoc($mirrors);

$default_mirror = "http://sundance.webchat.6irc.net";
