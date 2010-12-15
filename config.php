<?php
// bestmirror config

$mirrors = array(
	"http://aus.webchat.6irc.net" => "http://aus.webchat.6irc.net/images/qwebircsmall.png",
	"http://sundance.webchat.6irc.net" => "http://sundance.webchat.6irc.net/images/qwebircsmall.png",
	"http://minimal.webchat.6irc.net" => "http://minimal.webchat.6irc.net/images/qwebircsmall.png",
);
shuffle($mirrors);

$default_mirror = "http://sundance.webchat.6irc.net";
