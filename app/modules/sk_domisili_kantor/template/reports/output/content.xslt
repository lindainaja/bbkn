<?xml version="1.0" encoding="UTF-8" standalone="yes"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
 <xsl:template match="/">
  <w:document xmlns:ve="http://schemas.openxmlformats.org/markup-compatibility/2006" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:r="http://schemas.openxmlformats.org/officeDocument/2006/relationships" xmlns:m="http://schemas.openxmlformats.org/officeDocument/2006/math" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:wp="http://schemas.openxmlformats.org/drawingml/2006/wordprocessingDrawing" xmlns:w10="urn:schemas-microsoft-com:office:word" xmlns:w="http://schemas.openxmlformats.org/wordprocessingml/2006/main" xmlns:wne="http://schemas.microsoft.com/office/word/2006/wordml">
   <w:body>
    	<xsl:for-each select="root/row">
    <w:p w:rsidR="00E86BB7" w:rsidRPr="005A3EC3" w:rsidRDefault="00E86BB7" w:rsidP="003E789B">
     <w:pPr>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="10"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00DB5F6E" w:rsidRPr="003675A2" w:rsidRDefault="003675A2" w:rsidP="00DB5F6E">
     <w:pPr>
      <w:ind w:left="360"/>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:u w:val="single"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="008F7C3B">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:sz w:val="28"/>
       <w:u w:val="single"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
      <w:t>SURAT KETERANGAN</w:t>
     </w:r>
     <w:r w:rsidR="009373CE">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:sz w:val="28"/>
       <w:u w:val="single"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t xml:space="preserve"> DOMISILI </w:t>
     </w:r>
     <w:r w:rsidR="000D23B8">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:sz w:val="28"/>
       <w:u w:val="single"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t>PARTAI</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00DB5F6E" w:rsidRPr="005C348F" w:rsidRDefault="005C348F" w:rsidP="00DB5F6E">
     <w:pPr>
      <w:ind w:left="360"/>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="22"/>
       <w:szCs w:val="22"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="22"/>
       <w:szCs w:val="22"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
      <w:t><xsl:value-of select="no"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00DB5F6E" w:rsidRPr="004731EB" w:rsidRDefault="00DB5F6E" w:rsidP="00DB5F6E">
     <w:pPr>
      <w:ind w:left="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="004731EB" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:ind w:left="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="sv-SE"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="sv-SE"/>
      </w:rPr>
      <w:t>Yang bertanda tangan dibawah ini :</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="4395"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="sv-SE"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRDefault="00203329" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="4395"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="720" w:firstLine="720"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">N a m a                     </w:t>
     </w:r>
     <w:r w:rsidR="00302B4C" w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="005C348F">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_nama"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="00956FAF" w:rsidRDefault="00203329" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="4395"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="1080" w:firstLine="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">N I P                          </w:t>
     </w:r>
     <w:r w:rsidR="00302B4C" w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="005C348F">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_nip"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="1418"/>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4536"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="00956FAF">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidR="00203329">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">J a b a t a n               </w:t>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>:</w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="005C348F">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="00E86BB7" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="1418"/>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4536"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="14"/>
       <w:lang w:val="en-US"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="1418"/>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4678"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
     <w:r w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> Menerangkan dengan sebenarnya bahwa :</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="008F7C3B" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="1418"/>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4678"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="14"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00A375A7" w:rsidRDefault="001E4798" w:rsidP="00A375A7">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="1418"/>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4678"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:sz w:val="22"/>
       <w:szCs w:val="22"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:tab/>
      <w:t>Nama Ketua</w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">         </w:t>
     </w:r>
     <w:r w:rsidR="00302B4C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">: </w:t>
     </w:r>
     <w:r w:rsidR="005C348F">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:sz w:val="22"/>
       <w:szCs w:val="22"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="nama_ketua"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="00A375A7" w:rsidRDefault="00A375A7" w:rsidP="00A375A7">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="1418"/>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4678"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:sz w:val="22"/>
       <w:szCs w:val="22"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:sz w:val="22"/>
       <w:szCs w:val="22"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">Alamat Ketua       </w:t>
     </w:r>
     <w:r w:rsidR="00302B4C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">:  </w:t>
     </w:r>
     <w:r w:rsidR="005C348F">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="alamat_ketua"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="009C6B20" w:rsidRDefault="001E4798" w:rsidP="00D97A7F">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="1418"/>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4678"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="4678" w:hanging="4380"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:sz w:val="22"/>
       <w:szCs w:val="22"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:tab/>
      <w:t>Nama Organisasi</w:t>
     </w:r>
     <w:r w:rsidR="00302B4C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">: </w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="005C348F">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="nama_organisasi"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRDefault="009C6B20" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="1418"/>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4536"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:tab/>
      <w:t>Alamat Kantor     :</w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="005C348F">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="alamat_kantor"/></w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="00E86BB7" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="1418"/>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4536"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="6"/>
       <w:lang w:val="sv-SE"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="00ED2231" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4678"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360" w:firstLine="1058"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="14"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="004731EB" w:rsidRDefault="00C05128" w:rsidP="00302B4C">
     <w:pPr>
      <w:tabs>
       <w:tab w:val="left" w:pos="4395"/>
       <w:tab w:val="left" w:pos="4678"/>
      </w:tabs>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>........................................</w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="00302B4C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="sv-SE"/>
      </w:rPr>
      <w:t>tersebut</w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="sv-SE"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="00302B4C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="sv-SE"/>
      </w:rPr>
      <w:t>di</w:t>
     </w:r>
     <w:r w:rsidR="00302B4C" w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="sv-SE"/>
      </w:rPr>
      <w:t>atas benar memiliki Kantor</w:t>
     </w:r>
     <w:r w:rsidR="00302B4C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>/Sekretariat</w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="00302B4C" w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>di</w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="005C348F">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="domisili"/></w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">Tangerang </w:t>
     </w:r>
     <w:r w:rsidR="00302B4C" w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>Dusun/Dukuh/Kampung</w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="005C348F">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t><xsl:value-of select="lingkungan"/></w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve"> </w:t>
     </w:r>
     <w:r w:rsidR="00302B4C" w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">Kelurahan </w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>Babakan</w:t>
     </w:r>
     <w:r w:rsidR="00302B4C" w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">, Kecamatan </w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>Legok</w:t>
     </w:r>
     <w:r w:rsidR="00302B4C" w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">, Kabupaten </w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>Tangerang</w:t>
     </w:r>
     <w:r w:rsidR="00302B4C" w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">, Provinsi </w:t>
     </w:r>
     <w:r w:rsidR="0031199C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>Banten</w:t>
     </w:r>
     <w:r w:rsidR="00302B4C">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t>.</w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="004731EB" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:ind w:left="360" w:firstLine="360"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="16"/>
       <w:szCs w:val="16"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="004731EB" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
     <w:r>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:tab/>
     </w:r>
     <w:r w:rsidRPr="004731EB">
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
      <w:t xml:space="preserve">Demikian Surat Keterangan  ini kami buat dengan sebenar - sebanarnya untuk dipergunakan sebagaimana mestinya. </w:t>
     </w:r>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="00E86BB7" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="16"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="00E86BB7" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:spacing w:line="360" w:lineRule="auto"/>
      <w:ind w:left="360"/>
      <w:jc w:val="both"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:sz w:val="2"/>
       <w:lang w:val="pt-BR"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:tbl>
     <w:tblPr>
      <w:tblW w:w="14459" w:type="dxa"/>
      <w:tblInd w:w="108" w:type="dxa"/>
      <w:tblLayout w:type="fixed"/>
      <w:tblLook w:val="01E0"/>
     </w:tblPr>
     <w:tblGrid>
      <w:gridCol w:w="5103"/>
      <w:gridCol w:w="4820"/>
      <w:gridCol w:w="4536"/>
     </w:tblGrid>
     <w:tr w:rsidR="00302B4C" w:rsidRPr="004731EB" w:rsidTr="00080DCE">
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="5103" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00302B4C" w:rsidRPr="00FA1E40" w:rsidRDefault="00302B4C" w:rsidP="00080DCE">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="5760"/>
         </w:tabs>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00302B4C" w:rsidRPr="00FA1E40" w:rsidRDefault="00302B4C" w:rsidP="00080DCE">
        <w:pPr>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
      </w:tc>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="4820" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00302B4C" w:rsidRPr="00467FB3" w:rsidRDefault="004333F3" w:rsidP="003E789B">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="775"/>
          <w:tab w:val="left" w:pos="5760"/>
         </w:tabs>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
         <w:t><xsl:value-of select="nama_kel"/>, <xsl:value-of select="tanggal_surat"/></w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00302B4C" w:rsidRPr="00467FB3" w:rsidRDefault="004333F3" w:rsidP="00080DCE">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="775"/>
          <w:tab w:val="left" w:pos="5760"/>
         </w:tabs>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
         <w:t><xsl:value-of select="ttd_jabatan"/></w:t>
        </w:r>
        <w:r w:rsidR="00302B4C" w:rsidRPr="00467FB3">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
         <w:t>,</w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00302B4C" w:rsidRDefault="00302B4C" w:rsidP="00080DCE">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="775"/>
          <w:tab w:val="left" w:pos="1168"/>
          <w:tab w:val="left" w:pos="5760"/>
         </w:tabs>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00302B4C" w:rsidRDefault="00302B4C" w:rsidP="00080DCE">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="775"/>
         </w:tabs>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="10"/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="006511E9" w:rsidRPr="005A3EC3" w:rsidRDefault="006511E9" w:rsidP="00080DCE">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="775"/>
         </w:tabs>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:sz w:val="2"/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00302B4C" w:rsidRPr="00467FB3" w:rsidRDefault="00302B4C" w:rsidP="00080DCE">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="775"/>
         </w:tabs>
         <w:spacing w:line="360" w:lineRule="auto"/>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
        </w:pPr>
       </w:p>
       <w:p w:rsidR="00302B4C" w:rsidRPr="00467FB3" w:rsidRDefault="004333F3" w:rsidP="0031199C">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="1309"/>
         </w:tabs>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
         <w:t><xsl:value-of select="ttd_nama"/></w:t>
        </w:r>
       </w:p>
       <w:p w:rsidR="00302B4C" w:rsidRPr="00467FB3" w:rsidRDefault="00302B4C" w:rsidP="00080DCE">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="1309"/>
         </w:tabs>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:u w:val="single"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
        <w:r>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
         <w:t xml:space="preserve"> NIP : </w:t>
        </w:r>
        <w:r w:rsidR="004333F3">
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
         <w:t><xsl:value-of select="ttd_nip"/></w:t>
        </w:r>
        <w:bookmarkStart w:id="0" w:name="_GoBack"/>
        <w:bookmarkEnd w:id="0"/>
       </w:p>
       <w:p w:rsidR="00302B4C" w:rsidRPr="00467FB3" w:rsidRDefault="00302B4C" w:rsidP="00080DCE">
        <w:pPr>
         <w:tabs>
          <w:tab w:val="left" w:pos="1200"/>
         </w:tabs>
         <w:jc w:val="center"/>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:b/>
          <w:lang w:val="pt-BR"/>
         </w:rPr>
        </w:pPr>
       </w:p>
      </w:tc>
      <w:tc>
       <w:tcPr>
        <w:tcW w:w="4536" w:type="dxa"/>
       </w:tcPr>
       <w:p w:rsidR="00302B4C" w:rsidRPr="004731EB" w:rsidRDefault="00302B4C" w:rsidP="00080DCE">
        <w:pPr>
         <w:rPr>
          <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
          <w:lang w:val="en-US"/>
         </w:rPr>
        </w:pPr>
       </w:p>
      </w:tc>
     </w:tr>
    </w:tbl>
    <w:p w:rsidR="00302B4C" w:rsidRPr="004731EB" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:pStyle w:val="Title"/>
      <w:ind w:left="0" w:right="-364"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:sz w:val="34"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="00302B4C" w:rsidRPr="004731EB" w:rsidRDefault="00302B4C" w:rsidP="00302B4C">
     <w:pPr>
      <w:pStyle w:val="Title"/>
      <w:ind w:left="0" w:right="-364"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:b/>
       <w:sz w:val="34"/>
       <w:lang w:val="id-ID"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:p w:rsidR="007A0939" w:rsidRPr="004731EB" w:rsidRDefault="007A0939" w:rsidP="009E7A63">
     <w:pPr>
      <w:ind w:left="3780"/>
      <w:jc w:val="center"/>
      <w:rPr>
       <w:rFonts w:ascii="Arial" w:hAnsi="Arial" w:cs="Arial"/>
       <w:lang w:val="sv-SE"/>
      </w:rPr>
     </w:pPr>
    </w:p>
    <w:sectPr w:rsidR="007A0939" w:rsidRPr="004731EB" w:rsidSect="0088001C">
     <w:headerReference w:type="default" r:id="rId8"/>
     <w:pgSz w:w="12242" w:h="18722" w:code="178"/>
     <w:pgMar w:top="414" w:right="1185" w:bottom="567" w:left="1134" w:header="709" w:footer="709" w:gutter="0"/>
     <w:cols w:space="720"/>
     <w:docGrid w:linePitch="360"/>
    </w:sectPr>
    	</xsl:for-each>
   </w:body>
  </w:document>
 </xsl:template>
</xsl:stylesheet>
