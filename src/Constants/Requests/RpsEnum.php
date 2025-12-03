<?php

namespace NotaFiscalSP\Constants\Requests;

class RpsEnum
{
    const RPS = 'RPS';
    const RPS_TYPE = 'TipoRPS';
    const EMISSION_DATE = 'DataEmissao';
    const RPS_STATUS = 'StatusRPS';
    const RPS_TAX = 'TributacaoRPS';
    const SERVICE_VALUE_FINAL = 'ValorFinalCobrado';
    const DEDUCTION_VALUE = 'ValorDeducoes';
    const PIS_VALUE = 'ValorPIS';
    const COFINS_VALUE = 'ValorCOFINS';
    const INSS_VALUE = 'ValorINSS';
    const IR_VALUE = 'ValorIR';
    const IPI_VALUE = 'ValorIPI';
    const CSLL_VALUE = 'ValorCSLL';
    const SERVICE_CODE = 'CodigoServico';
    const SERVICE_TAX = 'AliquotaServicos';
    const ISS_RETENTION = 'ISSRetido';
    const IM_TAKER = 'InscricaoMunicipalTomador';
    const IE_TAKER = 'InscricaoEstadualTomador';
    const CORPORATE_NAME_TAKER = 'RazaoSocialTomador';
    const EMAIL_TAKER = 'EmailTomador';
    const DISCRIMINATION = 'Discriminacao';
    const CPFCNPJ_TAKER = 'CPFCNPJTomador';
    const CPFCNPJ_INTERMEDIARY = 'CPFCNPJIntermediario';
    const IM_INTERMEDIARY = 'InscricaoMunicipalIntermediario';
    const ISS_RETENTION_INTERMEDIARY = 'ISSRetidoIntermediario';
    const EMAIL_INTERMEDIARY = 'EmailIntermediario';
    const TAX_VALUE_INTERMEDIARY = 'ValorCargaTributaria';
    const TAX_PERCENT_INTERMEDIARY = 'PercentualCargaTributaria';
    const TAX_ORIGIN = 'FonteCargaTributaria';
    const CEI_CODE = 'CodigoCEI';
    const WORK_REGISTRATION = 'MatriculaObra';
    const CITY_INSTALLMENT = 'MunicipioPrestacao';
    const TOTAL_VALUE = 'ValorTotalRecebido';
    const ENCAPSULATION_NUMBER = 'NumeroEncapsulamento';
    const ENFORCEABILITY_SUSPENDED = 'ExigibilidadeSuspensa';
    const PAYMENT_IN_ADVANCE = 'PagamentoParceladoAntecipado';
    const NBS = 'NBS';
    const C_LOC_PRESTACAO = 'cLocPrestacao';
    const IBSCBS = 'IBSCBS';
    const FIN_NFSE = 'finNFSe';
    const IND_FINAL = 'indFinal';
    const C_IND_OP = 'cIndOp';
    const IND_DEST = 'indDest';
    const VALUES = 'valores';
    const TRIB = 'trib';
    const G_IBSCBS = 'gIBSCBS';
    const C_CLASS_TRIB = 'cClassTrib';


    public static function simpleTypes()
    {
        return [
            RpsEnum::RPS_TYPE,
            RpsEnum::EMISSION_DATE,
            RpsEnum::RPS_STATUS,
            RpsEnum::RPS_TAX,
            RpsEnum::DEDUCTION_VALUE,
            RpsEnum::PIS_VALUE,
            RpsEnum::COFINS_VALUE,
            RpsEnum::INSS_VALUE,
            RpsEnum::IR_VALUE,
            RpsEnum::CSLL_VALUE,
            RpsEnum::SERVICE_CODE,
            RpsEnum::SERVICE_TAX,
            RpsEnum::ISS_RETENTION,

            // RpsEnum::SERVICE_VALUE_FINAL,
        ];
    }

    public static function takerInformations()
    {
        return [
            RpsEnum::IM_TAKER,
            RpsEnum::IE_TAKER,
            RpsEnum::CORPORATE_NAME_TAKER,
        ];
    }
}
