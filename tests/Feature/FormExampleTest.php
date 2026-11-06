<?php

test('the form example page displays the submitted values', function () {
    $response = $this->get('/form-example?name=Anna&feedback=Hello');

    $response->assertOk();
    $response->assertSee('Anna');
    $response->assertSee('Hello');
});
