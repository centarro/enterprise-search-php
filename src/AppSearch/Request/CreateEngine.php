<?php

/**
 * Elastic Enterprise Search
 *
 * @link      https://github.com/elastic/enterprise-search-php
 * @copyright Copyright (c) Elasticsearch B.V (https://www.elastic.co)
 * @license   http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @generated This file is generated, please do not edit
 *
 * Licensed to Elasticsearch B.V under one or more agreements
 * Elasticsearch B.V licenses this file to you under the Apache 2.0 License
 * See the LICENSE file in the project root for more information
 */

declare(strict_types=1);

namespace Elastic\EnterpriseSearch\AppSearch\Request;

use Elastic\EnterpriseSearch\AppSearch\Schema\Engine;
use Elastic\EnterpriseSearch\Request\Request;

/**
 * Create an Engine
 * @see https://www.elastic.co/guide/en/app-search/current/engines.html#engines-create
 */
class CreateEngine extends Request
{
	/**
	 * @param Engine $engine
	 */
	public function __construct(Engine $engine)
	{
		$this->method = 'POST';
		$this->path = "/api/as/v1/engines";
		$this->headers['Content-Type'] = 'application/json';
		$this->body = $engine;
	}
}
