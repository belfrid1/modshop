<?php
namespace MailPoetVendor;
if (!defined('ABSPATH')) exit;
Swift_DependencyContainer::getInstance()->register('cache')->asAliasOf('cache.array')->register('tempdir')->asValue('/tmp')->register('cache.null')->asSharedInstanceOf('MailPoetVendor\\Swift_KeyCache_NullKeyCache')->register('cache.array')->asSharedInstanceOf('MailPoetVendor\\Swift_KeyCache_ArrayKeyCache')->withDependencies(['cache.inputstream'])->register('cache.disk')->asSharedInstanceOf('MailPoetVendor\\Swift_KeyCache_DiskKeyCache')->withDependencies(['cache.inputstream', 'tempdir'])->register('cache.inputstream')->asNewInstanceOf('MailPoetVendor\\Swift_KeyCache_SimpleKeyCacheInputStream');
