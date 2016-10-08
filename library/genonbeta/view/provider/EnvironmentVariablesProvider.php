<?php

/*
 * EnvironmentVariablesProvider.php
 * 
 * Copyright 2016 Veli TASALI <veli.tasali@gmail.com>
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 * 
 * 
 */

namespace genonbeta\view\provider;

use genonbeta\provider\SourceProviderObject;
use genonbeta\system\EnvironmentVariables;

class EnvironmentVariablesProvider implements SourceProviderObject
{
	const PROVIDER_NAME = "envVar";

	public function getProviderName()
	{
		return self::PROVIDER_NAME;
	}

	public function onRequest($request)
	{
		return EnvironmentVariables::get($request);
	}
}
