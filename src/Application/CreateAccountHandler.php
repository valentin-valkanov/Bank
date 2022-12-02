<?php declare(strict_types=1);

namespace ValentinValkanov\Bank\Application;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use ValentinValkanov\Bank\Account;

/**
 * Class CreateAccountHandler
 *
 * @author Valentin Valkanov <valentinvalkanof@gmail.com>
 * @copyright
 * @version
 */
class CreateAccountHandler implements RequestHandlerInterface
{

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $contents = $request->getBody()->getContents();

        // we get the data from the request
        // and then we create an account

        // $account = new Account($id);
        // $account->setCustomer($contents['customer']):

        // return new Response();

    }
}