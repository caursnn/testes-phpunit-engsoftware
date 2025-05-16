<?php

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../src/Funcoes.php';

class FuncoesTest extends TestCase
{
    /**
     * Testa se a função isEven retorna true para um número par
     * Garantindo que o tipo e o valor retornado são iguais a true
     */
    public function testIsEvenRetornaMesmoTipoEValor()
    {
        $resultado = Funcoes::isEven(4);
        $this->assertSame(true, $resultado);
    }

    /**
     * Testa o cálculo do fatorial se a entrada válida ou seja número positivo
     * Verificando se o resultado para o fatorial de 3 é igual a 6 nesse caso
     */
    public function testFactorialEntradaValida()
    {
        $resultado = Funcoes::factorial(3);
        $this->assertEquals(6, $resultado);
    }

    /**
     * Testando lançamento de InvalidArgumentException para entrada inválida com número negativo na função factorial
     */
    public function testFactorialEntradaInvalida()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::factorial(-5);
    }

    /**
     * Garantindo que a função factorial não vai retornar um valor incorreto sendo na entrada válida
     * Aqui nessa função verificando se o fatorial de 2 não é igual a 3
     */
    public function testFactorialNaoRetornarValorErrado()
    {
        $resultado = Funcoes::factorial(2);
        $this->assertNotEquals(3, $resultado);
    }

    /**
     * Testando se a função isPalindrome identifica uma string palíndroma ("Ana")
     * A comparação precisa ser case-insensitive e ignorar caracteres não alfanuméricos se tiver
     */
    public function testIsPalindromeComPalindromo()
    {
        $resultado = Funcoes::isPalindrome("Ana");
        $this->assertTrue($resultado);
    }

    /**
     * Testando a conversão de Fahrenheit para Celsius com um valor válido aqui
     */
    public function testFahrenheitToCelsiusValorValido()
    {
        $resultado = Funcoes::fahrenheitToCelsius(32);
        $this->assertEquals(0, $resultado);
    }

    /**
     * Testando o cálculo do desconto com valores de preço e porcentagem válidos 
     */
    public function testCalculateDiscountComValorValido()
    {
        $resultado = Funcoes::calculateDiscount(100, 10);
        $this->assertEquals(90, $resultado);
    }

    /**
     * Testando o lançamento de InvalidArgumentException quando o preço é negativo na função no caso entrada invalida 
     */
    public function testCalculateDiscountComValorNegativo()
    {
        $this->expectException(InvalidArgumentException::class);
        Funcoes::calculateDiscount(-50, 10);
    }
}