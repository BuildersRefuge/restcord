---
title: List Guild Emojis
category: Emoji
order: 1
---

# `listGuildEmojis`

```php
$client->emoji->listGuildEmojis($parameters);
```

## Description

Requires the MANAGE_EMOJIS permission.

## Parameters


Name | Type | Required | Default
--- | --- | --- | ---
guild.id | snowflake | true | *null*

## Response

Returns a list of emoji objects for the given guild.

Can Return:

* emoji
