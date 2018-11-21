<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\KernelInterface;
use Symfony\Component\Routing\Annotation\Route;

abstract class AbstractFile extends AbstractController {
	protected $kernel = null;

	public function __construct( KernelInterface $kernel ) {
		$this->kernel = $kernel;
	}

	abstract protected function getBaseUrl();
	abstract protected function getBaseDir( &$url );
	abstract protected function checkAccess( $pathName );

	/**
	 * @Route("")
	 * @Route("/")
	 */
	public function indexAction() {
		$this->checkAccess( '' );

		return $this->redirect( $this->getBaseUrl() . '/index.html' );
	}

	/**
	 * @Route("/{pathName}", requirements={"pathName"=".+"})
	 */
	public function fileAction( $pathName ) {
		$this->checkAccess( $pathName );

		$baseUrl = $this->getBaseUrl();
		$baseDir = $this->getBaseDir( $pathName );
		$fileName = $baseDir . '/' . $pathName;

		if ( !file_exists( $fileName ) ) {
			throw new NotFoundHttpException( "no such file: {$baseUrl}/{$pathName} ..." );
		}

		$extension = strtolower( pathinfo( $fileName, PATHINFO_EXTENSION ) );
		switch ( $extension ) {
			case 'htm' :
			case 'html' :
				return new BinaryFileResponse( $fileName, 200, [
					'content-type' => 'text/html',
				] );

			case 'js' :
				return new BinaryFileResponse( $fileName, 200, [
					'content-type' => 'text/javascript',
				] );

			case 'json' :
				return new BinaryFileResponse( $fileName, 200, [
					'content-type' => 'application/json',
				] );

			case 'css' :
				return new BinaryFileResponse( $fileName, 200, [
					'content-type' => 'text/css',
				] );

			/** @noinspection PhpMissingBreakStatementInspection */
			case 'jpg' :
				$extension = 'jpeg';

			case 'jpeg' :
			case 'png' :
			case 'gif' :
			case 'ico' :
				return new BinaryFileResponse( $fileName, 200, [
					'content-type' => 'image/' . $extension,
				] );

			default :
				throw new BadRequestHttpException( 'invalid request for unsupported file' );
		}
	}
}
