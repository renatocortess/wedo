$object = new stdClass();

$object->nome = !empty($Acolhido->nome) ? $Acolhido->nome : $object->nome;
$object->foto = !empty($Acolhido->foto) ? $Acolhido->foto : $object->foto;
$object->matricula = !empty($Acolhido->matricula) ? $Acolhido->matricula : $object->matricula;
$object->rg = !empty($Acolhido->rg) ? $Acolhido->rg : $object->rg;
$object->cpf = !empty($Acolhido->cpf) ? $Acolhido->cpf : $object->cpf;
$object->idade_primeiro_uso = !empty($Acolhido->idade_primeiro_uso) ? $Acolhido->idade_primeiro_uso : $object->idade_primeiro_uso;
$object->tempo_uso_ultima_vez = !empty($Acolhido->tempo_uso_ultima_vez) ? $Acolhido->tempo_uso_ultima_vez : $object->tempo_uso_ultima_vez;
$object->droga_preferencia = !empty($Acolhido->droga_preferencia) ? $Acolhido->droga_preferencia : $object->droga_preferencia;
$object->data_entrevista = !empty($Acolhido->data_entrevista) ? $Acolhido->data_entrevista : $object->data_entrevista;
$object->data_acolhimento = !empty($Acolhido->data_acolhimento) ? $Acolhido->data_acolhimento : $object->data_acolhimento;
$object->entrevistado_por = !empty($Acolhido->entrevistado_por) ? $Acolhido->entrevistado_por : $object->entrevistado_por;
$object->observacao = !empty($Acolhido->observacao) ? $Acolhido->observacao : $object->observacao;
$object->peso = !empty($Acolhido->peso) ? $Acolhido->peso : $object->peso;
$object->drogadicao = !empty($Acolhido->drogadicao) ? $Acolhido->drogadicao : $object->drogadicao;
$object->motivo_uso = !empty($Acolhido->motivo_uso) ? $Acolhido->motivo_uso : $object->motivo_uso;

$object->estado_civil->descricao = !empty($Acolhido->estado_civil->descricao) ? $Acolhido->estado_civil->descricao : $object->estado_civil->descricao;
$object->profissao = !empty($Acolhido->profissao) ? $Acolhido->profissao : $object->profissao;

$object->data_nascimento = !empty($Acolhido->data_nascimento) ? $Acolhido->data_nascimento : $object->data_nascimento;

$object->email = !empty($Acolhido->email) ? $Acolhido->email : $object->email;
$object->telefone = !empty($Acolhido->telefone) ? $Acolhido->telefone : $object->telefone;

$object->celular = !empty($Acolhido->celular) ? $Acolhido->celular : $object->celular;

$object->nacionalidade = !empty($Acolhido->nacionalidade) ? $Acolhido->nacionalidade : $object->nacionalidade;
$object->nome_pai = !empty($Acolhido->nome_pai) ? $Acolhido->nome_pai : $object->nome_pai;
$object->nome_mae = !empty($Acolhido->nome_mae) ? $Acolhido->nome_mae : $object->nome_mae;
$object->grau_escolaridade = !empty($Acolhido->grau_escolaridade) ? $Acolhido->grau_escolaridade : $object->grau_escolaridade;
$object->titulo_eleitor = !empty($Acolhido->titulo_eleitor) ? $Acolhido->titulo_eleitor : $object->titulo_eleitor;
$object->cep = !empty($Acolhido->cep) ? $Acolhido->cep : $object->cep;
$object->endereco = !empty($Acolhido->endereco) ? $Acolhido->endereco : $object->endereco;
$object->numero_endereco = !empty($Acolhido->numero_endereco) ? $Acolhido->numero_endereco : $object->numero_endereco;
$object->bairro = !empty($Acolhido->bairro) ? $Acolhido->bairro : $object->bairro;
$object->complemento = !empty($Acolhido->complemento) ? $Acolhido->complemento : $object->complemento;
$object->cidade->descricao = !empty($Acolhido->cidade_id) ? $Acolhido->cidade_id : $object->cidade_id;
$object->grau_escolaridade_id = !empty($Acolhido->grau_escolaridade_id) ? $Acolhido->grau_escolaridade_id : $object->grau_escolaridade_id;

TForm::sendData(self::$formName, $object);
