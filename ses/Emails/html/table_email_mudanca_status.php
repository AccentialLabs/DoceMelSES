<?php ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<table align="center" border="0" cellpadding="0" cellspacing="0" style="border-bottom: 5px solid #f37165; background: #f3f3f3;" width="600">
    <tr>
        <td rowspan="31" colspan="3" width="100" style="background: #999;"></td> 
        <td colspan="3"><img src="http://54.207.82.125/stores/docemel/portal/img/docemel/logo.png" id="adv-logo-sup" width="150" style="padding-top: 10px;"/></td>
    </tr>
    <tr>
        <td style="height: 5px;" colspan="2"></td>
    </tr>
    <tr style="background: #F8F8FF; ">
        <td width="30" style="padding: 5px; "><img src="http://uploaddeimagens.com.br/images/000/429/581/full/Icon.png?1421345160" id="icon-email" width="45" style="margin-left: 15px;" /></td>
        <td style="font-size: 11px; padding: 5px;" width="1000" colspan="2">
            <span style="font-family: Helvetica; color: #555; font-size: 11px; " >PEDIDO 99999</span><br/>
            <span style="font-family: Helvetica; color: #999; font-size: 11px; " >Mudança de Status da transação!</span>
        </td>
    </tr>
    <tr>
        <td style="height: 15px;" colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3" style="padding: 5px; padding-left: 15px;"><span style="color: #3399cc; font-family: Helvetica; font-size: 14px;"><i>Caro Sr(a). <?php echo $data['userName']; ?>,</i></span></td>
    </tr>
    <tr>
        <td style="height: 25px;" colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3" style="padding-left: 15px;">
            <span style="color:#999;font-size: 12px; font-family: Helvetica;">
                <strong>Seu pedido foi recebido com sucesso!</strong><br/>
                Confira as informacoes abaixo que constam no seu pedido <strong>nº <?php echo $data['checkId']; ?></strong><br />
                realizado em <strong>XX/XX/XX as XX:XX:</strong>
            </span>
        </td>
    </tr>
    <tr>
        <td style="height: 15px;" colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3" style="padding-left: 15px;">
            <span style="color:#999; margin-top:15px ;font-size: 12px; font-family: Helvetica;">
                <strong>Detalhes do pedido:</strong><br />
                <span>Forma de Pagamento: <?php echo $data['checkPaymentMethod']; ?></span><br />
                <span>Parcelas: <?php echo $data['checkInstallment']; ?> vez(es) de R$<?php echo $data['checkTotalValue']; ?></span><br/>
                <span>Total Frete: R$<?php echo $data['deliveryvalue']; ?> </span><br/>
                <span>Total Desconto: R$<?php echo $data['discountValue']; ?></span><br/>
                <span>Total Pedido: R$<?php echo $data['checkTotalValue']; ?></span><br/>
            </span>
        </td>
    </tr>
    <tr>
        <td style="height: 15px;" colspan="3"></td>
    </tr>
    <tr>
        <td  colspan="3" style="text-align: center;">
            <span  style=" color: #f37165; font-family: Helvetica; font-size: 16px;"><i>Produtos</i></span>
        </td>
    </tr>

    <tr>
        <td style="height: 15px;" colspan="3"></td>
    </tr>
    <tr>
        <td colspan="3">
            <table width="100%" style="font-size: 12px; color: #999; font-family: Helvetica; ">
                <tr>
                    <td style="padding-left: 15px;" width="200"><?php echo $data['offerTitle']; ?></td>
                    <td style="text-align: center;" width="200"><hr style="border: 0;
                                                                    height: 1px;
                                                                    opacity: 0.5;
                                                                    background-image: -webkit-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
                                                                    background-image:    -moz-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
                                                                    background-image:     -ms-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0)); 
                                                                    background-image:      -o-linear-gradient(left, rgba(0,0,0,0), rgba(0,0,0,0.75), rgba(0,0,0,0));"/></td>
                    <td style="text-align: right; padding-right: 15px;" width="200">R$<?php echo $data['offerValue']; ?></td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td style="height: 15px;" colspan="3"></td>
    </tr>
    <tr>
        <td  colspan="3" style="text-align: center;">
            <span  style=" color: #f37165; font-family: Helvetica; font-size: 16px;"><i>Entrega</i></span>
        </td>
    </tr>
    <tr>
        <td style="height: 15px;" colspan="3"></td>
    </tr>
    <tr>
        <td style="padding-left: 15px; background: #f3f3f3; font-size: 12px; color: #999; font-family: Helvetica;" colspan="3">O endereco de entrega informado/selecionado por voce foi:</td>
    </tr>
    <tr>
        <td style="padding-left: 15px; background: #f3f3f3; font-size: 12px; color: #999; font-family: Helvetica;" colspan="3">
            <strong>
                <?php echo $data['addressLabel']; ?> <br/>
                <?php echo $data['address']; ?>, <?php echo $data['addressNum']; ?> <?php echo $data['addressComple']; ?>  - <?php echo $data['addressDristrict']; ?><br/>
                <?php echo $data['addressCity']; ?> - <?php echo $data['addressState']; ?> - CEP <?php echo $data['addressZipCode']; ?>
            </strong>
        </td>
    </tr>
    <tr>
        <td style="padding-left: 15px; background: #f3f3f3; font-size: 12px; color: #999; font-family: Helvetica;" colspan="3">
            <br/>
            <span>
                <strong>IMPORTANTE!</strong><br/>
                <span style="line-height: 13px; font-size: 10px;">O <strong>Prazo de Entrega</strong> de <strong><?php echo $data['deliverytime']; ?></strong> dias passara a partir da confirmacao do pagamento e sera ralizado pela propria<br/>
                    XPTO. A Loja Doce Mel nao realiza, nem se responsabiliza pela entrega de produtos comercializados atraves do seu <br />
                    aplicativo ou site. Se tiver duvidas, por favor, consulte os Termos e Condicoes de Uso disponiveis em nosso site.<br/>
                    Se seu pedido possui mais de um item, estes podem ser enviados separadamente, de acordo com a disponibili-<br/>
                    dade do estoque da Empresa anunciante.
                </span>
            </span>
        </td>
    </tr>
    <tr>
        <td style="height: 15px;" colspan="3"></td>
    </tr>
    <tr>
        <td style="text-align: center;" colspan="3">
            <span  style=" color: #f37165; font-family: Helvetica; font-size: 16px;"><i>Status</i></span>
        </td>
    </tr>
    <tr>
        <td style="height: 15px;" colspan="3"></td>
    </tr>

    <tr>
        <td style="padding-left: 15px;" colspan="3">
            <span style="color:#999; font-size: 12px; font-family: Helvetica;">
                Seu pedido esta <strong><?php echo $data['checkPaymentStatus']; ?></strong> pela instituicao financeira. Assim que for liberado, voce<br/>
                recebera um e-mail informando a alteracao do status.<br/>
                Qualquer duvida referente ao processo de aprovacao, entre em contato conosco pelo <br/>
                email <span style="color: #3399cc;">atendimento@docemel.com.br</span>, informando no campo assunto o numero do seu<br/>
                pedido. Se preferir, voce tambem pode entrar em contato diretamente com a Empresa <br />
                anunciante. Os dados de contato sao:</span>
        </td>
    </tr>
    <tr>
        <td style="padding-left: 15px; background: #f3f3f3; font-size: 12px; color: #999; font-family: Helvetica;" colspan="3">
            <br/>
            <span>
                <strong>
                    Empresa <?php echo $data['compFancy']; ?><br/>
                    <?php echo $data['compAddress']; ?>, <?php echo $data['compNumber']; ?> <br/>
                    <?php echo $data['compDistrict']; ?> - <?php echo $data['compCity']; ?> - <?php echo $data['compState']; ?><br/>
                    CEP <?php echo $data['compZipcode']; ?><br/>
                    Telefone: <?php echo $data['compTel']; ?><br/>
                    e-mail: <span style="color: #3399cc;"><?php echo $data['compEmail']; ?></span>
                </strong>
            </span>
        </td>
    </tr>
    <tr>
        <td style='padding-left: 15px;' colspan="3">
            <br/>
            <span style="font-size: 10px; color:#999;  font-family: Helvetica;">
                Para sua seguranca, a intstituicao financeira pode realizar a analise de dados cadastrais; portanto, mantenha<br/>
                seus dados atualizados no site. Para verificar ou atualizar seus dados, <span style="color: #3399cc;">clique aqui</span>.
                <br/>
                <br/>

                A qualquer momento, voce pode acompanhar o andamento do seu pedido pelo portal <strong>Doce Mel</strong> acessando<br />
                <span style="color: #3399cc;">www.lojasdocemel.com.br</span> no menu Minhas Compras. <span style="color: #3399cc;">Clique aqui</span> para verifica agora.
                <br />
                <br />
                Se precisar, entre em contato com nossa central de atendimento<br />
                Nosso horário de atendimento é de segunda a sexta das 8 as 18h.
            </span>
        </td>
    </tr>
    <tr>
        <td style="height: 15px;" colspan="3"></td>
    </tr>

    <tr>
        <td style='padding-left: 15px;' colspan="3">
            <br />
            <span style="color:#999; margin-top:20px ;font-size: 12px; font-family: Helvetica;">
                Atenciosamente,<br/>
                <strong style="color: #999; font-size: 16px;">Equipe Doce Mel</strong><br/>
                <strong style="color: #999; font-size: 16px;">www.lojasdocemel.com.br</strong>
            </span>
        </td>
    </tr>
    <tr>
        <td style='padding-left: 15px;' colspan="3"> 
            <br/>
            <img src="http://54.207.82.125/stores/docemel/portal/img/docemel/logo.png" width="100px" style="opacity: 0.4;"/>
        </td>
    <br/>
</tr>
</table>


