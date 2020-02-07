<?php

declare(strict_types=1);

namespace Frontend\User\Handler;

use Dot\AnnotatedServices\Annotation\Inject;
use Fig\Http\Message\RequestMethodInterface;
use Frontend\User\Form\LoginForm;
use Frontend\User\Service\UserService;
use Laminas\Diactoros\Response\HtmlResponse;
use Mezzio\Router\RouterInterface;
use Mezzio\Template\TemplateRendererInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

/**
 * Class LoginHandler
 * @package Frontend\User\Handler
 */
class LoginHandler implements RequestHandlerInterface
{
    /** @var RouterInterface $router */
    protected $router;

    /** @var TemplateRendererInterface $template */
    protected $template;

    /** @var UserService $userService */
    protected $userService;

    /**
     * LoginHandler constructor.
     * @param RouterInterface $router
     * @param TemplateRendererInterface $template
     * @param UserService $userService
     *
     * @Inject({RouterInterface::class, TemplateRendererInterface::class, UserService::class})
     */
    public function __construct(
        RouterInterface $router,
        TemplateRendererInterface $template,
        UserService $userService
    ) {
        $this->router = $router;
        $this->template = $template;
        $this->userService = $userService;
    }

    /**
     * @param ServerRequestInterface $request
     * @return ResponseInterface
     */
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $form = new LoginForm();

        if (RequestMethodInterface::METHOD_POST === $request->getMethod()) {
            $form->setData($request->getParsedBody());
            if ($form->isValid()) {
                echo '<pre>';
                var_export($form->getData());
                exit(__FILE__ . ': ' . __LINE__);
                try {
                    ;
                } catch (\Exception $exception) {
                    ;
                }
            } else {
                echo '<pre>';
                var_export($form->getMessages());
                exit(__FILE__ . ': ' . __LINE__);
            }
        }

        return new HtmlResponse(
            $this->template->render('user::login', [
                'form' => $form
            ])
        );
    }
}
